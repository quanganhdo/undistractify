<?php
class UrlsController extends AppController {

	var $name = 'Urls';
	
	function index() {
		$this->pageTitle = __('Home', true);
		$this->set('urls', $this->Url->findAll());
	}
	
	function view($id = null) {
		if (!$id) {
			$this->redirect('/');
		}
		
		$url = $this->Url->findById($id);
		$this->redirect($url['Url']['address']);
	}
	
}
?>