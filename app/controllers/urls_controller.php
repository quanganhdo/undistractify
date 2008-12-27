<?php
class UrlsController extends AppController {

	var $name = 'Urls';
	
	function index() {
		$this->pageTitle = __('Home', true);
		$this->set('urls', $this->Url->find('all', array(
			'order' => 'created DESC',
			'limit' => '20'
		)));
	}
	
	function view($id = null) {
		if (!$id) {
			$this->redirect('/');
		}
		
		$url = $this->Url->findById($id);
		if ($this->Time->wasWithinLast('15 minutes', $url['Url']['lastvisit'])) {
			$this->redirect('/pages/stop');
		} 
		
		$this->Url->visit($id);
		$this->redirect($url['Url']['address']);
	}
	
	function add() {
		if (!empty($this->data)) {
			$this->Url->create($this->data);
			if ($this->Url->save()) {
				$this->redirect('/');
			}
		}
		$this->data['Url']['address'] = 'http://';
	}	
}
?>