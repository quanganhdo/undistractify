<?php
class User extends AppModel {
	
	var $name = 'User';
	
	var $actsAs = array('Containable');
	
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