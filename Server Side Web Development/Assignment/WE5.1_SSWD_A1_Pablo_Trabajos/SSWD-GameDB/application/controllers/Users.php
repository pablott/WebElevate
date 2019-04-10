<?php
// The code is based on this tutorial
// https://www.codexworld.com/codeigniter-tutorial-beginners-learn-codeigniter-scratch/

defined('BASEPATH') OR exit('No direct script access allowed');



class Users extends CI_Controller {

// TODO follow PEAR standard
	public function __construct()
	{
		// Extend the constructor of CI_Controller
		parent::__construct();

		// Load model
		$this->load->model('users_model');
	}


	// Show welcome page
	public function index()
	{
		$this->load->view('welcome_view');
	}


	// Serve list of users
	public function get_users()
	{
		// Get data from the database
		$data['users'] = $this->users_model->get_users();
		$this->load->view('users_view', $data);
	}


	// Serve info of user
	public function get_info($id)
	{
		// Get data from the database
		$data['info'] = $this->users_model->get_info($id);
		$this->load->view('info_view', $data);

		// Check if there was a result
		/*if (isset($data['info'])) {
			// Prepare the data for JSON
			$this->load->view('info_view', $data);
		}
		else {
			$out['error'] = 'No such user ID';
			echo json_encode($out);
		}*/
	}
}
