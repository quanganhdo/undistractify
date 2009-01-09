<?php
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/:name', array('controller' => 'users', 'action' => 'view'), array('pass' => array('name')));
	Router::connect('/go/:id', array('controller' => 'urls', 'action' => 'view'), array('pass' => array('id')));
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
?>