<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->database();
		// $this->load->model('crud_model');
		// $this->load->model('login_model');
		$this->load->library('session','upload');
		$this->load->model('Auth_model');
	}




	public function index()
	{
		$this->load->view('login');
	}


	public function processadminlogin()
	{

		$email = $_POST['validation-email'];
		$password = $_POST['validation-password'];
		
		$password = sha1($_POST['validation-password']);

		$login = $this->Auth_model->processadminlogin($email,$password);

		if ($login) {
			if ($_SESSION['Role'] == "Super Admin") {

				$this->session->set_flashdata('Successs', "Welcome $_SESSION[name]");
				// redirect(base_url().'admin/validatestudent');
				redirect(base_url().'managefile');

			}
			if ($_SESSION['Role'] == "User") {

				$this->session->set_flashdata('Successs', "Welcome $_SESSION[name]");
				// redirect(base_url().'admin/validatestudent');
				redirect(base_url().'asmanagefile');

			}
			else {
				$this->session->set_flashdata('Error', "Invalid user or user does not exist.");
			}

			

		}else{
			$this->session->set_flashdata('Error', "invalid user");
			redirect(base_url());
		}
			// $this->session->set_flashdata('Error', 'Your made it!');
			
	// 	redirect(base_url().'admin/dashboard');
	// } else {
	// 	$this->session->set_flashdata('success',$result['message']);
	// 	redirect(base_url().'index');
	// }


		// $this->load->view('login');
	}
	





		
	public function registerstudent()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {

				
				$indexnumber = $_POST['validation-index-number'];
				$surname = $_POST['surname'];
				$firstname = $_POST['firstname'];
				$dob = $_POST['dob'];


				$data = $this->Auth_model->registerstu($indexnumber,$surname,$firstname,$dob);

				if ($data == "norecord") {

					$this->session->set_flashdata('Error', "Student does not exit");
					redirect(base_url().'admin/validatestudent');

				}elseif ($data == 1) {
					$this->session->set_flashdata('Success', "Student successfully resgisted");
					redirect(base_url().'admin/validatestudent');
				}else{
					$this->session->set_flashdata('Error', "invalid user");
					redirect(base_url().'validatestudent');
				}
			} else {

				$this->session->set_flashdata('Error', "You do not have access to validate");
				redirect(base_url());
			}
		} else {

			$this->session->set_flashdata('Error', "You do not have access to validate");
			redirect(base_url());
		}
	}




	public function athenticationcode()
	{


		$this->load->view('authenticationpage');
	}



	public function processathenticationcode()
	{
		$this->load->view('login');
	}




	public function forgotpassword()
	{



		// $data['changepassword'] = $this->Auth_model->changepassword();

		$this->load->view('forgotpassword');
	}





	public function processforgotpassword()
	{

		$username = $this->test_input($_POST['validation-username']);
		$number = $this->test_input($_POST['validation-number']);


		$forgotPassword = $this->Auth_model->processforgotpassword($number, $username);

		if ($forgotPassword['statusCode'] == 200) {

			$this->session->set_flashdata('success', $forgotPassword['message']);
			redirect(base_url().'resetforgotpassword');
		} else {

			$this->session->set_flashdata('error', $forgotPassword['message']);
			redirect(base_url().'forgotpassword');
		}
	}








	public function resetforgotpassword()
	{


		$this->load->view('reset-forgotpassword');
	}





	public function processresetpassword()
	{

		$password = $this->test_input($_POST['validation-password']);


		$reset = $this->Auth_model->processresetpassword($password);

		if ($reset['statusCode'] == 200) {

			$this->session->set_flashdata('success', $reset['message']);
			redirect(base_url().'index');
		} else {

			$this->session->set_flashdata('error', $reset['message']);
			redirect(base_url().'index');
		}
	}








	public function logout()
	{
		//load session library
		$this->load->library('session');
		unset($_SESSION['Role']);
		unset($_SESSION['UserIs']);
		unset($_SESSION['FullName']);
		unset($_SESSION['PhoneNumber']);
		unset($_SESSION['number']);
		 session_destroy();

		redirect(base_url());
	}













	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
}