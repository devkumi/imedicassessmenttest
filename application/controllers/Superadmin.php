<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Superadmin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		
		
		
		$this->load->library('session', 'upload');
		$this->load->model('Superadmin_model');
		$this->load->helper('file');
	}


	


	public function managelogs()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Super Admin" && $_SESSION['UserId'] != null) {


				$data['managelogs'] = $this->Superadmin_model->managelogs();
			
				
				
				
				
				
				

				$this->load->view('superadmin/logs', $data);
			} else {

				redirect(base_url());
			}
		} else {

			redirect(base_url());
		}
	}







    
    


	public function managefile()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Super Admin" && $_SESSION['UserId'] != null) {


				$data['managefile'] = $this->Superadmin_model->managefile();

				$this->load->view('superadmin/manage-file', $data);
			} else {

				redirect(base_url());
			}
		} else {

			redirect(base_url());
		}
	}






	
	

	public function addfile()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Super Admin" && $_SESSION['UserId'] != null) {

				$title = $this->test_input($_POST['validation-name']);
				
				$RAND1 = sprintf("%06d", mt_rand(1, 999999));

				$Date_            =  date("Y-m-d h:i:s");
				$Date1_           =  str_replace(" ", "", $Date_);
				$Date2_           =  str_replace(":", "", $Date1_);
				$Date3_           =  str_replace("-", "", $Date2_);
				$Date4_           =  str_replace("/", "", $Date3_);
				$slipImg  =  $Date4_ . $RAND1;


				$ext = pathinfo($_FILES['doc']['name'], PATHINFO_EXTENSION);
				
				$filename =  $slipImg . "." . $ext;
				
				$size = $_FILES["doc"]["size"];

				if ($size >= 1073741824)
				{
					$size = number_format($size / 1073741824, 2) . ' GB';
				}
				elseif ($size >= 1048576)
				{
					$size = number_format($size / 1048576, 2) . ' MB';
				}
				elseif ($size >= 1024)
				{
					$size = number_format($size / 1024, 2) . ' KB';
				}
				elseif ($size > 1)
				{
					$size = $size . ' bytes';
				}
				elseif ($size == 1)
				{
					$size = $size . ' byte';
				}
				else
				{
					$size = '0 bytes';
				}
				


				$config['allowed_types'] = 'pdf';
				$config['overwrite'] = TRUE;


				$location = 'uploads/encrypts/encode/'.$filename;
				$b64Doc = base64_encode(file_get_contents($_FILES['doc']['tmp_name']));
				
				$b64Doc;

				


				$data = $this->Superadmin_model->addcvcount($title ,$ext,$size ,$b64Doc);

				if ($data == "recordexist") {

					$this->session->set_flashdata('Error', "File Already exit");
					redirect(base_url() . 'managefile');
				} elseif ($data == 1) {
					$this->session->set_flashdata('Success', "File added successfully");
					redirect(base_url() . 'managefile');
				} else {
					$this->session->set_flashdata('Error', "Operation Failed, contact support");
					redirect(base_url() . 'managefile');
				}

				
			} else {

				redirect(base_url());
			}
		} else {

			redirect(base_url());
		}
	}
















	public function manageuser()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Super Admin" && $_SESSION['UserId'] != null) {


				$data['getalladmin'] = $this->Superadmin_model->getalluser();
				$data['getallrole'] = $this->Superadmin_model->getallrole();
				

				$this->load->view('superadmin/manage-users', $data);
			} else {

				redirect(base_url());
			}
		} else {

			redirect(base_url());
		}
	}







	public function adduser()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Super Admin" && $_SESSION['UserId'] != null) {


				$name = $this->test_input($_POST['validation-name']);
				$number = $this->test_input($_POST['validation-number']);
				$surname = $this->test_input($_POST['validation-surname']);
				$email = $this->test_input($_POST['validation-email']);
				$role = $this->test_input($_POST['role']);
				
				$data = $this->Superadmin_model->adduser($name,$number,$role,$surname,$email);

				if ($data == "recordexist") {

					$this->session->set_flashdata('Error', "User Already exit");
					redirect(base_url() . 'manageuser');
				} elseif ($data == 1) {
					$this->session->set_flashdata('Success', "User successfully Created");
					redirect(base_url() . 'manageuser');
				} else {
					$this->session->set_flashdata('Error', "Operation Failed, contact support");
					redirect(base_url() . 'manageuser');
				}
			} else {

				redirect(base_url());
			}
		} else {

			redirect(base_url());
		}
	}










	public function edituser()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Super Admin" && $_SESSION['UserId'] != null) {


				$adminId = $this->test_input($_POST['userId']);
				$name = $this->test_input($_POST['validation-name']);
				$number = $this->test_input($_POST['validation-number']);
				$surname = $this->test_input($_POST['validation-surname']);
				$email = $this->test_input($_POST['validation-email']);
				$role = $this->test_input($_POST['role']);
				
					$data = $this->Superadmin_model->edituser($name, $number, $role, $surname, $email, $adminId);

					if ($data == "recorddoesnotexist") {

						$this->session->set_flashdata('Error', "User does not exit");
						redirect(base_url() . 'manageuser');
					} elseif ($data == 1) {
						$this->session->set_flashdata('Success', "User edited successfully");
						redirect(base_url() . 'manageuser');
					} else {
						$this->session->set_flashdata('Error', "Operation Failed, contact support");
						redirect(base_url() . 'manageuser');
					}
				
			} else {

				redirect(base_url());
			}
		} else {

			redirect(base_url());
		}
	}









	public function activatedeactivateadmin()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Super Admin" && $_SESSION['UserId'] != null) {


				$adminId = $this->test_input($_POST['adminId']);
				$key = $this->test_input($_POST['key']);

				if ($key == "activate") {
					$data = $this->Superadmin_model->activateadmin($adminId);
					if ($data == "recorddoesnotexist") {
						$this->session->set_flashdata('Error', "User does not exit");
						redirect(base_url() . 'manageuser');
					} elseif ($data == 1) {
						$this->session->set_flashdata('Success', "User activated successfully");
						redirect(base_url() . 'manageuser');
					} else {
						$this->session->set_flashdata('Error', "Operation Failed, contact support");
						redirect(base_url() . 'manageuser');
					}
				}


				if ($key == "deactivate") {
					$data = $this->Superadmin_model->deactivateadmin($adminId);

					if ($data == "recorddoesnotexist") {

						$this->session->set_flashdata('Error', "User does not exit");
						redirect(base_url() . 'manageuser');
					} elseif ($data == 1) {
						$this->session->set_flashdata('Success', "Assocaiate deactivated successfully");
						redirect(base_url() . 'manageuser');
					} else {
						$this->session->set_flashdata('Error', "Operation Failed, contact support");
						redirect(base_url() . 'manageuser');
					}
				}


				if ($key == "reset") {
					$data = $this->Superadmin_model->reset($adminId);

					if ($data == "recorddoesnotexist") {

						$this->session->set_flashdata('Error', "User does not exit");
						redirect(base_url() . 'manageuser');
					} elseif ($data == 1) {
						$this->session->set_flashdata('Success', "Assocaiate password reset successfully");
						redirect(base_url() . 'manageuser');
					} else {
						$this->session->set_flashdata('Error', "Operation Failed, contact support");
						redirect(base_url() . 'manageuser');
					}
				}
			} else {

				redirect(base_url());
			}
		} else {

			redirect(base_url());
		}
	}









	public function changepassword()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Super Admin" && $_SESSION['UserId'] != null) {


				

				$this->load->view('superadmin/changepassword');
			} else {

				redirect(base_url());
			}
		} else {

			redirect(base_url());
		}
	}






	public function processchangepassword()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Super Admin" && $_SESSION['UserId'] != null) {




				$oldpassword = $this->test_input($_POST['validation-old-password']);
				$newpasswprd = $this->test_input($_POST['validation-password']);

				$oldpasswprd = $this->test_input($_POST['validation-password-confirmation']);

				$changepassword = $this->Superadmin_model->changepassword($oldpassword, $newpasswprd);

				if ($changepassword == 1) {

					$this->session->set_flashdata('Success', "Password updated");
					redirect(base_url() . 'changepassword');
				} else {

					$this->session->set_flashdata('Error', "Failed to update password");
					redirect(base_url() . 'changepassword');
				}
			} else {

				redirect(base_url());
			}
		} else {

			redirect(base_url());
		}
	}




	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

}
