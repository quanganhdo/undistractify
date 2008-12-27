<?php
class UrlsController extends AppController {

	var $name = 'Urls';
	
	function index() {
		$this->set('urls', $this->Url->findAll());
	}
	
}
?>