<?php
class PagesController extends AppController {

	var $name = 'Pages';
	var $helpers = array('Html');
	var $uses = array();
	
	function display($version = null, $file = null) {
		if (!$version || !$file) {
			$this->redirect('/');
		}
		
		$this->pageTitle = Inflector::humanize($file);
		$this->layout = ife(@$version == 'lo-fi', 'bare', 'default');
		$this->render($file);
	}
}

?>