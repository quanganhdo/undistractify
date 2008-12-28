<?php
class AppModel extends Model{
	
	// http://noserub.com/download/
	var $sanitizeExclusion = array(); // models to exclude
	var $sanitization = array (
        /*
        'Model' => array (
            'ignore_keys' => null, # define an array of the keys you don't want to sanitize
            'allow_tags' => array('<a>'),  # define an array of allowed tags
            'purify_keys' => null  # define which key value has to be purified (purifier must be installed first)
        )
        */
    );

	// http://noserub.com/download/
	function beforeSave() {
        # sanitize some elements
        if(!empty ($this->data)) {
            if(!in_array($this->name, $this->sanitizeExclusion)) {

                if(array_key_exists($this->name, $this->sanitization)) {
                    $ignore_keys = $this->sanitization[$this->name]['ignore_keys'];
                    $purify_keys = $this->sanitization[$this->name]['purify_keys'];
                    $allowed_tags = $this->sanitization[$this->name]['allow_tags'];
                } else {
                    $ignore_keys = null;
                    $allowed_tags = null;
                    $purify_keys = null;
                }

                foreach($this->data as $modelName => $model) {
                    if(is_array($model)) {
                        foreach ($model as $fieldName => $field) {
                            if(!is_array($field) && $field === null) {
                                # preserve null values
                                continue;
                            }
                            if(!is_array($field)) {
                                if(is_array($ignore_keys) && in_array($fieldName, $ignore_keys)) {
                                    $this->data[$modelName][$fieldName] = preg_replace('/\+A[\w]+\-/i','',$field);
                                }
                                else if(is_array($purify_keys) && in_array($fieldName, $purify_keys)) {
                                    #replace this line by the html purifier code
                                    $this->data[$modelName][$fieldName] = $field;
                                } else {
                                    if(is_array($allowed_tags) && count($allowed_tags) != 0) {
                                        #html and dangerous attributes
                                    	$this->data[$modelName][$fieldName] = strip_tags($field, implode(',', $allowed_tags));
                                        $this->data[$modelName][$fieldName] = preg_replace('/\+A[\w]+\-/iDs','', $this->data[$modelName][$fieldName]);
                                        $this->data[$modelName][$fieldName] = preg_replace('/<[^>].*(style|on).*\s*=.*>/iDs',' ', $this->data[$modelName][$fieldName]);
                                    } else {
                                        #html and dangerous attributes
                                    	$this->data[$modelName][$fieldName] = strip_tags($field);
                                        $this->data[$modelName][$fieldName] = str_replace('"', '”', $this->data[$modelName][$fieldName]);
                                        $this->data[$modelName][$fieldName] = preg_replace('/\+A[\w]+\-/iDs','', $this->data[$modelName][$fieldName]);
                                        
                                        #dangerous unicode characters
								        #$this->data[$modelName][$fieldName] = urldecode(preg_replace('/(?:%E(?:2|3)%8(?:0|1)%(?:A|8|9)\w|%EF%BB%BF)|(?:&#(?:65|8)\d{3};?)/i', ' ', urlencode($this->data[$modelName][$fieldName])));
                                        #$this->data[$modelName][$fieldName] = urldecode(preg_replace('/(?:&#(?:65|8)\d{3};?)|(?:&#x(?:fe|20)\w{2};?)/i', ' ', $this->data[$modelName][$fieldName]));
                                    }
                                }
                            } else {
                                /**
                                 * @todo: add some logic here to enable recursive filtering
                                 */
                            }
                        }
                    }
                }
            }
        }
        
        return true;
    }

	// http://noserub.com/download/
	function afterFind($data) {
        # de-sanitize some elements
        
        if(empty($data)) {
            return $data;
        }
        
        foreach ($data as $key => $item) {
            if(!is_array($item)) {
                continue;
            }

            foreach ($item as $model => $attributes) {
                if (!in_array($model, $this->sanitizeExclusion)) {
                    
                    # de-sanitize for whatever purpose - we have to talk about this!
                    if (is_array($attributes)) {
                        foreach ($attributes as $fieldName => $field) {
                            if (!is_array($field) && !empty ($field)) {
                                $replacements = array (
                                    "&",
                                    "%",
                                    "<",
                                    ">",
                                    '"',
                                    "'",
                                    "(",
                                    ")",
                                    "+",
                                    "-"
                                );
                                $patterns = array (
                                    "/\&amp;/",
                                    "/\&#37;/",
                                    "/\&lt;/",
                                    "/\&gt;/",
                                    "/\&quot;/",
                                    "/\&#39;/",
                                    "/\&#40;/",
                                    "/\&#41;/",
                                    "/\&#43;/",
                                    "/\&#45;/"
                                );
                                $field = preg_replace($patterns, $replacements, $field);
                                $data[$key][$model][$fieldName] = $field;
                            }
                        }
                    }
                }
            }
        }

        return $data;
    }
}
?>