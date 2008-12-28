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
	
	function original() {
		$this->pageTitle = __('Original links', true);
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
		
		if (!$url) {
			$this->redirect('/pages/lo-fi/blackhole');
		}
		
		if ($this->Time->wasWithinLast('1 hour', $url['Url']['lastvisit'])) {
			$this->redirect('/pages/lo-fi/stop');
		} 
		
		$this->Url->visit($id);
		$this->redirect($url['Url']['address']);
	}
	
	function add() {
		$this->pageTitle = __('Add new link', true);
		if (!empty($this->data)) {
			$this->Url->create($this->data);
			if ($this->Url->save()) {
				if (!$this->data['Url']['close']) {
					$this->redirect('/');
				}
				$url = $this->Url->findById($this->Url->getLastInsertID());
				$this->set('url', $url);
				$this->layout = 'bare';
				$this->render('undistractified');
			}
		}
		
		if (isset($this->params['url']['address'])) {
			$this->data['Url']['address'] = isset($this->params['url']['address']) ? $this->params['url']['address'] : 'http://';
			$this->data['Url']['title'] = isset($this->params['url']['title']) ? $this->params['url']['title'] : '';
			$this->set('close', 1);
		} else {
			$this->data['Url']['address'] = 'http://';
			$this->set('close', 0);
		}
	}	
	
	function edit($id = null) {
		$this->pageTitle = __('Edit link', true);
		if (!$id) {
			$this->redirect('/');
		}
		
		if (!empty($this->data)) {
			$this->Url->create($this->data);
			$this->Url->id = $id;
			if ($this->Url->save()) {
				$this->redirect('/');
			}
		}
		$this->data = $this->Url->findById($id);
	}
	
	function delete($id = null) {
		if (!$id || $this->Url->delete($id)) {
			$this->redirect('/');
		}		
	}
}
?>