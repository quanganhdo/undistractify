<?php
class UsersController extends AppController {
	
	var $name = 'Users';
	var $uses = array('User', 'Url');

	function index() {
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

}
?>