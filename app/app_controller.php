<?php
class AppController extends Controller {
	
	var $components = array('DebugKit.Toolbar', 'Time', 'Session', 'Cookie');
	var $helpers = array('Html', 'Form', 'Text', 'Javascript', 'Session');
	
	function beforeFilter() {
		$this->Cookie->name = 'undistractify';
		$this->Cookie->time = '365 days';
		
		if (!$this->Session->check('Account') && $this->Cookie->read('u')) {
			$user = $this->User->read(null, $this->Cookie->read('u'));
			if ($user) {
				$this->Session->write('Account', $user);
			}
		}
	}
	
}
?>