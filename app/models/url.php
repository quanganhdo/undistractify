<?php
class Url extends AppModel {

	var $name = 'Url';
	
	var $actsAs = array('Containable');
	
	var $validate = array(
		'address' => array(
			'rule' => 'url',
			'message' => 'A valid URL is required'
		)
	);
	
	var $belongsTo = array(
			'User' => array('className' => 'User',
								'foreignKey' => 'user_id',
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'counterCache' => true,
			)
	);

	function beforeSave() {
		if (isset($this->data['Url']['address'])) {
			$this->data['Url']['title'] = empty($this->data['Url']['title']) ? $this->data['Url']['address'] : $this->data['Url']['title'];
		}
		return parent::beforeSave();
	}
	
	function visit($id) {
		$this->id = $id;
		$this->saveField('lastvisit', date('Y-m-d H:i:s'));
	}
	
}
?>