<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Associate extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('session', 'upload');
		$this->load->model('Associate_model');
		$this->load->helper('file');
	}





	public function managefile()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "User" && $_SESSION['UserId'] != null) {


				$data['managefile'] = $this->Associate_model->managefile();
			
				$this->load->view('associate/manage-file', $data);
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


			if ($_SESSION['Role'] == "User" && $_SESSION['UserId'] != null) {

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
				


				// $config['allowed_types'] = 'pdf';
				$config['overwrite'] = TRUE;


				$location = 'uploads/encrypts/encode/'.$filename;
				$b64Doc = base64_encode(file_get_contents($_FILES['doc']['tmp_name']));
				//  $img = "data:image/png;base64,$b64Doc";
				$b64Doc;

				// file_put_contents($location, $b64Doc);


				$data = $this->Associate_model->addfile($title ,$ext,$size ,$b64Doc);

				if ($data == "recordexist") {

					$this->session->set_flashdata('Error', "File Already exit");
					redirect(base_url() . 'asmanagefile');
				} elseif ($data == 1) {
					$this->session->set_flashdata('Success', "File added successfully");
					redirect(base_url() . 'asmanagefile');
				} else {
					$this->session->set_flashdata('Error', "Operation Failed, contact support");
					redirect(base_url() . 'asmanagefile');
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

			if ($_SESSION['Role'] == "User" && $_SESSION['UserId'] != null) {


				$this->load->view('associate/changepassword');

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


			if ($_SESSION['Role'] == "User" && $_SESSION['UserId'] != null) {


				$oldpassword = $this->test_input($_POST['validation-old-password']);
				$newpasswprd = $this->test_input($_POST['validation-password']);

				$oldpasswprd = $this->test_input($_POST['validation-password-confirmation']);

				$changepassword = $this->Associate_model->changepassword($oldpassword, $newpasswprd);

				if ($changepassword == 1) {

					$this->session->set_flashdata('Success', "Password updated");
					redirect(base_url() . 'aschangepassword');
				} else {

					$this->session->set_flashdata('Error', "Failed to update password");
					redirect(base_url() . 'aschangepassword');
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
