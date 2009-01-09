<?php
class AppController extends Controller {
	
	var $components = array('DebugKit.Toolbar', 'Time', 'Session', 'Cookie');
	var $helpers = array('Html', 'Form', 'Text', 'Javascript', 'Session');
	
	function beforeFilter() {
		$this->Cookie->name = 'undistractify';
		$this->Cookie->time = '365 days';
		
		if ($this->isGuest() && $this->Cookie->read('u')) {
			$this->User->contain('Url');
			$user = $this->User->findById($this->Cookie->read('u'));
			if ($user) {
				$this->Session->write('Account', $user);
			}
		}
		
		if ($this->authenticationNeeded() && $this->isGuest()) {
			$this->redirect('/pages/home');
		}
	}
	
	function isGuest() {
		return !$this->Session->check('Account');
	}
	
	function authenticationNeeded() {
		return $this->name != 'Pages' && $this->action != 'login';
	}
	
}
?>