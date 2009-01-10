<?php
class AppController extends Controller {
	
	var $components = array('DebugKit.Toolbar', 'Time', 'Session', 'Cookie');
	var $helpers = array('Html', 'Form', 'Text', 'Javascript', 'Session');
	var $uses = array('Url', 'User');
	
	function beforeFilter() {
		$this->Cookie->name = 'undistractify';
		$this->Cookie->time = '365 days';
		
		$this->set('isGuest', $this->isGuest());
		
		// two ways to login automatically:
		// - Login by cookie (u -> user id)
		// - Login by $_GET token (tk -> user id)
		if ($this->isGuest() && ($this->Cookie->read('u') || isset($this->params['url']['tk']))) {
			$this->User->contain();
			$user = $this->User->read(null, $this->Cookie->read('u') ? $this->Cookie->read('u') : $this->params['url']['tk']);
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