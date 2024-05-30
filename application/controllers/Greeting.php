<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[AllowDynamicProperties]
class Greeting extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('UserModel');
	}


	public function sayHello()
	{
		$data['users'] = $this->UserModel->showAllUsers();
		$data['usersU'] = $this->UserModel->showAllUsersByLetter();
		$data['choices'] = $this->UserModel->showChoices();
		$this->load->view('sayHello', $data);
	}

	public function testArray()
	{
		$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
		$this->load->view('testArray', $data);
	}


}
