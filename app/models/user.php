<?php
class User extends AppModel {
	
	var $name = 'User';
	
	var $actsAs = array('Containable');
	
	var $validate = array(
		'name' => array(
			'rule' => array('isUnique', 'name'),
			'message' => 'Must be unique'
		)
	);
	
	var $hasMany = array(
			'Url' => array('className' => 'Url',
								'foreignKey' => 'user_id',
								'dependent' => false,
								'conditions' => '',
								'fields' => '',
								'order' => 'Url.created DESC',
								'limit' => '15',
								'offset' => '',
								'exclusive' => '',
								'finderQuery' => '',
								'counterQuery' => '',
								'dependent' => true,
			)
	);

}
?>