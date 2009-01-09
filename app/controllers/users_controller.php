<?php
class UsersController extends AppController {
	
	var $name = 'Users';
	var $uses = array('User', 'Url');

	function index() {
		if (!$this->Session->check('Account')) {
			$this->redirect('/pages/home');
		} else {
			$this->set('urls', $this->Session->read('Account.Url'));
		}
	}
	
	function login() {
		if (!empty($this->data)) {
			$this->User->contain('Url');
			$user = $this->User->findByName($this->data['User']['name']);
			if ($user) {
				$this->Cookie->write('u', $user['User']['id']);
				$this->Session->write('Account', $user);
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