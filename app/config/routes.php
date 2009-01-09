<?php
	Router::connect('/', array('controller' => 'urls', 'action' => 'index'));
	Router::connect('/go/:id', array('controller' => 'urls', 'action' => 'view'), array('pass' => array('id')));
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
?>