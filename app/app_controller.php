<?php
class AppController extends Controller {
	
	var $components = array('DebugKit.Toolbar', 'Time', 'Session', 'Cookie');
	var $helpers = array('Html', 'Form', 'Text', 'Javascript', 'Session');
	
	function beforeFilter() {
		$this->Cookie->name = 'undistractify';
		$this->Cookie->time = '365 days';
		
		if ($this->isGuest() && $this->Cookie->read('u')) {
			$this->User->contain();
			$user = $this->User->read(null, $this->Cookie->read('u'));
			if ($user) {
				$this->Session->write('User', $user['User']);
			}
		}
		
		if ($this->authenticationNeeded() && $this->isGuest()) {
			$this->redirect('/pages/home');
		}
	}
	
	function isGuest() {
		return !$this->Session->check('User');
	}
	
	function authenticationNeeded() {
		// allow:
		// - Pages.*
		// - Users.login
		// - Urls.view
		// deny
		// - the rest
		return $this->name != 'Pages' && !in_array("{$this->name}.{$this->action}", array(
			'Users.login', 
			'Urls.view'
		));
	}
	
	function userID() {
		return $this->Session->read('User.id');
	}
	
}
?>