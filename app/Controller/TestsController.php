<?php
App::uses('AppController', 'Controller');
class TestsController extends AppController {

	public function home(){
		
		$announce = 'announcing!';
		$this->set('announ', $announce);
	}
	
	public function display(){
		
		
	}

}
