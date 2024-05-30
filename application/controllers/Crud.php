<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[AllowDynamicProperties]
class Crud extends CI_Controller {

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
		$this->load->model('CrudModel');
	}

	public function saveRecord()
	{
		$this->load->view('insert');
		if ($this->input->post('save')) {
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');
			$response = $this->CrudModel->saveRecord($data);
			if($response) {
				echo "Inserted successfully!";
			}
			else {
				echo "You failed";
			}
		}
	}


}
