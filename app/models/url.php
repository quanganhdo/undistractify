<?php
class Url extends AppModel {

	var $name = 'Url';
	var $validate = array(
		'address' => array('url')
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

}
?>