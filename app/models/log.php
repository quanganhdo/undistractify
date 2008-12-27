<?php
class Log extends AppModel {

	var $name = 'Log';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Url' => array('className' => 'Url',
								'foreignKey' => 'url_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

}
?>