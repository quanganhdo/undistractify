<?php
class UsersController extends AppController {
	
	var $name = 'Users';
	var $uses = array('User', 'Url');

	function index() {
		$this->pageTitle = __('Dashboard', true);
		$this->User->contain('Url');
		$user = $this->User->findById($this->userID());
		$this->set('urls', $user['Url']);
	}
	
	function original() {
		$this->pageTitle = __('Original links', true);
		$this->User->contain('Url');
		$user = $this->User->findById($this->userID());
		$this->set('urls', $user['Url']);
	}
	
	function login() {
		if (!empty($this->data)) {
			$this->User->contain();
			$user = $this->User->findByName($this->data['User']['name']);
			if ($user) {
				$this->Cookie->write('u', $user['User']['id']);
				$this->Session->write('User', $user['User']);
			}
		}
		$this->redirect('/');
	}
	
	function logout() {
		$this->Session->destroy();
		$this->Cookie->destroy();
		$this->redirect('/');
	}
	
	function account() {
		$this->pageTitle = __('Account', true);
		if (!empty($this->data)) {
			$this->User->create($this->data);
			$this->User->id = $this->userID();
			if ($this->User->save()) {
				$this->Session->destroy();
				$this->redirect('/');
			}
		}
		
		$this->User->contain();
		$this->data = $this->User->findById($this->userID());
	}

}
?>