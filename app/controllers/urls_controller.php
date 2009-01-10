<?php
class UrlsController extends AppController {

	var $name = 'Urls';
	
	function view($id = null) {
		if (!$id) {
			$this->redirect('/');
		}
		
		$this->Url->contain('User');
		$url = $this->Url->findById($id);
		
		if (!$url) {
			$this->redirect(Configure::read('404_NOT_FOUND'));
		}
		
		if ($url['User']['interval'] != 'infinity' && $this->Time->wasWithinLast($url['User']['interval'], $url['Url']['lastvisit'])) {
			$this->redirect(Configure::read('403_FORBIDDEN'));
		} 
		
		$this->Url->visit($id);
		$this->redirect($url['Url']['address']);
	}
	
	function add() {
		$this->pageTitle = __('Add new link', true);
		
		if (!empty($this->data)) {
			$this->data['Url']['user_id'] = $this->userID();
			$this->Url->create($this->data);
			if ($this->Url->save()) {
				$this->redirect('/');
			}
		}
		
		$this->data['Url']['address'] = 'http://';
	}	
	
	function bml() {
		$this->pageTitle = __('Add new link', true);
		
		if (!empty($this->data)) {
			$this->data['Url']['user_id'] = $this->userID();
			$this->Url->create($this->data);
			if ($this->Url->save()) {
				$url = $this->Url->findById($this->Url->id);
				$this->set('url', $url);
				$this->render('undistractified');
			}
		}
		
		$this->data['Url']['address'] = isset($this->params['url']['address']) ? $this->params['url']['address'] : 'http://';
		$this->data['Url']['title'] = isset($this->params['url']['title']) ? $this->params['url']['title'] : '';
	}
	
	function edit($id = null) {
		$this->pageTitle = __('Edit link', true);
		
		if (!$id) {
			$this->redirect('/');
		}
		
		$this->Url->contain();
		$url = $this->Url->findById($id);
		
		if ($url['Url']['user_id'] != $this->userID()) {
			$this->redirect('/');
		}
		
		if (!empty($this->data)) {
			$this->Url->create($this->data);
			$this->Url->id = $id;
			if ($this->Url->save()) {
				$this->redirect('/');
			}
		}
		$this->data = $url;
	}
	
	function delete($id = null) {
		if (!$id) {
			$this->redirect('/');
		}		
		
		$this->Url->contain();
		$url = $this->Url->findById($id);
		
		if ($url['Url']['user_id'] != $this->userID()) {
			$this->redirect('/');
		}
		
		if ($this->Url->delete($id)) {
			$this->redirect('/');
		}
	}
}
?>