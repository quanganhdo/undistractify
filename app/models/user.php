<?php
class User extends AppModel {
	
	var $name = 'User';
	
	var $hasMany = array(
			'Url' => array('className' => 'Url',
								'foreignKey' => 'user_id',
								'dependent' => false,
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'limit' => '',
								'offset' => '',
								'exclusive' => '',
								'finderQuery' => '',
								'counterQuery' => '',
								'dependent' => true,
			)
	);

}
?>