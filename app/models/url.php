<?php
class Url extends AppModel {

	var $name = 'Url';
	var $validate = array(
		'address' => array(
			'rule' => 'url',
			'message' => 'Please specify a valid URL'
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'Log' => array('className' => 'Log',
								'foreignKey' => 'url_id',
								'dependent' => false,
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'limit' => '',
								'offset' => '',
								'exclusive' => '',
								'finderQuery' => '',
								'counterQuery' => ''
			)
	);
	
	function beforeSave() {
		if (isset($this->data['Url']['address'])) {
			$this->data['Url']['title'] = empty($this->data['Url']['title']) ? $this->data['Url']['address'] : $this->data['Url']['title'];
		}
		return true;
	}
	
	function visit($id) {
		$this->id = $id;
		$this->saveField('lastvisit', date('Y-m-d H:i:s', time()));
	}
	
}
?>