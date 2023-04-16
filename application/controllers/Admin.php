<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->database();
		// $this->load->model('crud_model');
		// $this->load->model('login_model');
		$this->load->library('session', 'upload');
		$this->load->model('Admin_model');
	}



	public function dashboard()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {


				// $data['housenumber'] = $this->Admin_model->housenumber();
				$data['counttotalregistered'] = $this->Admin_model->counttotalregistered();
				$data['counttotalregisteredbyadmin'] = $this->Admin_model->counttotalregisteredbyadmin();
				$data['getAllPendingRegistered'] = $this->Admin_model->getAllPendingRegistered();
				$data['getAllStudentCount'] = $this->Admin_model->getAllStudentCount();
				$data['getAllStudents'] = $this->Admin_model->getAllStudents();
				// $data['getAllHousesCount'] = $this->Admin_model->getAllHousesCount();

				$this->load->view('admin/dashboard', $data);
			} else {

				redirect(base_url().'admin');
			}
		} else {

			redirect(base_url().'admin');
		}
	}



    
    // public function panel()
	// {
	// 	if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


	// 		if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] == 3 || $_SESSION['UserId'] == 5 || $_SESSION['UserId'] == 6) {


	// 			$data['getTotalCash'] = $this->Admin_model->getTotalCashPanel();
	// 			$data['counttotalregistered'] = $this->Admin_model->counttotalregistered();
	// 			$data['counttotalregisteredbyadminPanel'] = $this->Admin_model->counttotalregisteredbyadminPanel();
	// 			$data['getAllPendingRegistered'] = $this->Admin_model->getAllPendingRegistered();
	// 			$data['getAllStudentCount'] = $this->Admin_model->getAllStudentCount();
	// 			$data['getAllStudents'] = $this->Admin_model->getAllStudents();
	// 			$data['getAllHousesCount'] = $this->Admin_model->getAllHousesCount();

	// 			$this->load->view('admin/dashboard', $data);
	// 		} else {

	// 			redirect(base_url().'admin');
	// 		}
	// 	} else {

	// 		redirect(base_url().'admin');
	// 	}
	// }






	
	


	public function manageschool()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {


				$data['getalladmin'] = $this->Admin_model->manageschool();
				$data['getallregions'] = $this->Admin_model->getallregions();
				// $data['counttotalregistered'] = $this->Admin_model->counttotalregistered();
				// $data['counttotalregisteredbyadminPanel'] = $this->Admin_model->counttotalregisteredbyadminPanel();
				// $data['getAllPendingRegistered'] = $this->Admin_model->getAllPendingRegistered();
				// $data['getAllStudentCount'] = $this->Admin_model->getAllStudentCount();
				// $data['getAllStudents'] = $this->Admin_model->getAllStudents();
				// $data['getAllHousesCount'] = $this->Admin_model->getAllHousesCount();

				$this->load->view('admin/manage-school', $data);
			} else {

				redirect(base_url().'admin');
			}
		} else {

			redirect(base_url().'admin');
		}
	}







	




	


	public function schooldetails($parameter1)
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {


				$schoolId = $this->test_input($parameter1);
				$data['manageschooldetails'] = $this->Admin_model->manageschooldetails($schoolId);
				$data['getAllRegistered'] = $this->Admin_model->getAllRegistered($schoolId);
				$data['getAllHousesCount'] = $this->Admin_model->getAllHousesCount($schoolId);
				$data['getAllHouse'] = $this->Admin_model->getAllHouse($schoolId);
				// $data['counttotalregisteredbyadminPanel'] = $this->Admin_model->counttotalregisteredbyadminPanel();
				// $data['getAllPendingRegistered'] = $this->Admin_model->getAllPendingRegistered();
				// $data['getAllStudentCount'] = $this->Admin_model->getAllStudentCount();
				// $data['getAllStudents'] = $this->Admin_model->getAllStudents();
				// $data['getAllHousesCount'] = $this->Admin_model->getAllHousesCount();

				$this->load->view('admin/manage-school-details', $data);
			} else {

				redirect(base_url().'admin');
			}
		} else {

			redirect(base_url().'admin');
		}
	}








	



	public function addhouse()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {


				$housename = $this->test_input($_POST['housename']);
				$housecolor = $this->test_input($_POST['housecolor']);
				$schoolId = $this->test_input($_POST['schoolId']);
				$capacity = $this->test_input($_POST['capacity']);
				$gender = $this->test_input($_POST['gender']);


				$data = $this->Admin_model->addhouse($housename,$housecolor,$schoolId,$capacity,$gender);

				if ($data == "recordexist") {

					$this->session->set_flashdata('Error', "House Already exit");
					redirect(base_url().'aschooldetails/'.$schoolId);
				} elseif ($data == 1) {
					$this->session->set_flashdata('Success', "House successfully Created");
					redirect(base_url().'aschooldetails/'.$schoolId);
				} else {
					$this->session->set_flashdata('Error', "Operation Failed, contact support");
					redirect(base_url().'aschooldetails/'.$schoolId);
				}
			} else {

				redirect(base_url().'admin');
			}
		} else {

			redirect(base_url().'admin');
		}
	}










	public function edithouse()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {


				$housename = $this->test_input($_POST['housename']);
				$housecolor = $this->test_input($_POST['housecolor']);
				$schoolId = $this->test_input($_POST['schoolId']);
				$housenumber = $this->test_input($_POST['housenumber']);
				$capacity = $this->test_input($_POST['capacity']);
				$gender = $this->test_input($_POST['gender']);

				$data = $this->Admin_model->edithouse($housename,$housecolor,$schoolId,$housenumber,$capacity,$gender);

				if ($data == "recordexist") {

					$this->session->set_flashdata('Error', "House does not exit");
					redirect(base_url().'aschooldetails/'.$schoolId);
				} elseif ($data == 1) {
					$this->session->set_flashdata('Success', "House successfully Updated");
					redirect(base_url().'aschooldetails/'.$schoolId);
				} else {
					$this->session->set_flashdata('Error', "Operation Failed, contact support");
					redirect(base_url().'aschooldetails/'.$schoolId);
				}
			} else {

				redirect(base_url().'admin');
			}
		} else {

			redirect(base_url().'admin');
		}
	}









	
	public function managecoordinator()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {


				$data['getalladmin'] = $this->Admin_model->getcoordinator();
				$data['getallrole'] = $this->Admin_model->getallrole();
				$data['getallschool'] = $this->Admin_model->getallschool();
				// $data['counttotalregisteredbyadminPanel'] = $this->Admin_model->counttotalregisteredbyadminPanel();
				// $data['getAllPendingRegistered'] = $this->Admin_model->getAllPendingRegistered();
				// $data['getAllStudentCount'] = $this->Admin_model->getAllStudentCount();
				// $data['getAllStudents'] = $this->Admin_model->getAllStudents();
				// $data['getAllHousesCount'] = $this->Admin_model->getAllHousesCount();

				$this->load->view('admin/manage-coordinators', $data);
			} else {

				redirect(base_url().'admin');
			}
		} else {

			redirect(base_url().'admin');
		}
	}







	public function addcoordinate()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {


				$name = $this->test_input($_POST['validation-name']);
				$number = $this->test_input($_POST['validation-number']);
				$surname = $this->test_input($_POST['validation-surname']);
				$email = $this->test_input($_POST['validation-email']);
				$role = $this->test_input($_POST['role']);
				$schoolId = $this->test_input($_POST['schoolId']);

				if (empty($_FILES["image"]["size"])) {
					$this->session->set_flashdata('Error', "Please upload profile picture");
					redirect(base_url().'acoordinator');
				}

				// $data = $this->Admin_model->checkadminexistence($email, $number);


				// if (empty($_FILES["image"]["size"] > 600000)) {
				// 	$this->session->set_flashdata('Error', "Please upload profile picture");
				// 	redirect(base_url().'acoordinator');
				// }

				$RAND1 = sprintf("%06d", mt_rand(1, 999999));

				$Date_            =  date("Y-m-d h:i:s");
				$Date1_           =  str_replace(" ", "", $Date_);
				$Date2_           =  str_replace(":", "", $Date1_);
				$Date3_           =  str_replace("-", "", $Date2_);
				$Date4_           =  str_replace("/", "", $Date3_);
				$slipImg  =  $Date4_ . $RAND1;


				$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
				$slipImage =  $slipImg . "." . $ext;


				$config['allowed_types'] = 'jpg|png';
				$config['overwrite'] = TRUE;
				$config['max_size'] = 600;
				// $productId = $this->input->post('productId');
				$photo = $slipImage;
				// $config['file_name'] = $slipImage;
				$this->load->library('upload', $config);
				$location = 'uploads/profile/admins/' . $photo;

				if ($_FILES["image"]["size"] > 600000) {

					$this->session->set_flashdata('Error', 'Maximum image size is 200kb');
					// $data = array('image_metadata' => $this->upload->data());
					redirect(base_url().'acoordinator');

				}
				move_uploaded_file($_FILES["image"]["tmp_name"], $location);


				$data = $this->Admin_model->addadmin($name, $number, $role, $surname, $email,$schoolId,$photo);

				if ($data == "recordexist") {

					$this->session->set_flashdata('Error', "Coordinater Already exit");
					redirect(base_url().'acoordinator');
				} elseif ($data == 1) {
					$this->session->set_flashdata('Success', "Coordinater successfully Created");
					redirect(base_url().'acoordinator');
				} else {
					$this->session->set_flashdata('Error', "Operation Failed, contact support for assistance");
					redirect(base_url().'acoordinator');
				}
			} else {

				redirect(base_url().'admin');
			}
		} else {

			redirect(base_url().'admin');
		}
	}










	public function editcoordinate()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {


				$adminId = $this->test_input($_POST['adminId']);
				$name = $this->test_input($_POST['validation-name']);
				$number = $this->test_input($_POST['validation-number']);
				$surname = $this->test_input($_POST['validation-surname']);
				$email = $this->test_input($_POST['validation-email']);
				$role = $this->test_input($_POST['role']);
				$schoolId = $this->test_input($_POST['schoolId']);
				if (!isset($_FILES['image']['name'])) {
					$data = $this->Admin_model->editadmin($name, $number, $role, $surname, $email, $adminId, $schoolId);

					if ($data == "recorddoesnotexist") {

						$this->session->set_flashdata('Error', "User does not exit");
						redirect(base_url().'acoordinator');
					} elseif ($data == 1) {
						$this->session->set_flashdata('Success', "Coordinater edited successfully");
						redirect(base_url().'acoordinator');
					} else {
						$this->session->set_flashdata('Error', "Operation Failed, contact support");
						redirect(base_url().'acoordinator');
					}
				}



				$RAND1 = sprintf("%06d", mt_rand(1, 999999));

				$Date_            =  date("Y-m-d h:i:s");
				$Date1_           =  str_replace(" ", "", $Date_);
				$Date2_           =  str_replace(":", "", $Date1_);
				$Date3_           =  str_replace("-", "", $Date2_);
				$Date4_           =  str_replace("/", "", $Date3_);
				$slipImg  =  $Date4_ . $RAND1;


				$ext = pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION);
				$slipImage =  $slipImg . "." . $ext;


				$config['allowed_types'] = 'jpg|png';
				$config['overwrite'] = TRUE;
				$config['max_size'] = 600;
				// $productId = $this->input->post('productId');
				$photo = $slipImage;
				// $config['file_name'] = $slipImage;
				$this->load->library('upload', $config);
				$location = 'uploads/profile/admins/' . $photo;

				if ($_FILES["images"]["size"] > 600000) {

					$this->session->set_flashdata('Error', 'Maximum image size is 200kb');
					// $data = array('image_metadata' => $this->upload->data());
					redirect(base_url().'acoordinator');

				}
				move_uploaded_file($_FILES["images"]["tmp_name"], $location);


				$data = $this->Admin_model->editadminwithimg($name, $number, $role, $surname, $email, $adminId,$photo);

				if ($data == "recorddoesnotexist") {

					$this->session->set_flashdata('Error', "User does not exit");
					redirect(base_url().'acoordinator');
				} elseif ($data == 1) {
					$this->session->set_flashdata('Success', "Admin edited successfully");
					redirect(base_url().'acoordinator');
				} else {
					$this->session->set_flashdata('Error', "Operation Failed, contact support");
					redirect(base_url().'acoordinator');
				}
			
			} else {

				redirect(base_url().'admin');
			}
		} else {

			redirect(base_url().'admin');
		}
	}









	public function activatedeactivatecoordinate()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {


				$adminId = $this->test_input($_POST['adminId']);
				$key = $this->test_input($_POST['key']);

				if ($key == "activate") {
					$data = $this->Admin_model->activateadmin($adminId);
					if ($data == "recorddoesnotexist") {

						$this->session->set_flashdata('Error', "User does not exit");
						redirect(base_url().'acoordinator');
					} elseif ($data == 1) {
						$this->session->set_flashdata('Success', "Admin edited successfully");
						redirect(base_url().'acoordinator');
					} else {
						$this->session->set_flashdata('Error', "Operation Failed, contact support");
						redirect(base_url().'acoordinator');
					}
				}


				if ($key == "deactivate") {
					$data = $this->Admin_model->deactivateadmin($adminId);

					if ($data == "recorddoesnotexist") {

						$this->session->set_flashdata('Error', "User does not exit");
						redirect(base_url().'acoordinator');
					} elseif ($data == 1) {
						$this->session->set_flashdata('Success', "Admin edited successfully");
						redirect(base_url().'acoordinator');
					} else {
						$this->session->set_flashdata('Error', "Operation Failed, contact support");
						redirect(base_url().'acoordinator');
					}
				}


				if ($key == "reset") {
					$data = $this->Admin_model->reset($adminId);

					if ($data == "recorddoesnotexist") {

						$this->session->set_flashdata('Error', "User does not exit");
						redirect(base_url().'acoordinator');
					} elseif ($data == 1) {
						$this->session->set_flashdata('Success', "Admin password reset successfully");
						redirect(base_url().'acoordinator');
					} else {
						$this->session->set_flashdata('Error', "Operation Failed, contact support");
						redirect(base_url().'acoordinator');
					}
				}
			} else {

				redirect(base_url().'admin');
			}
		} else {

			redirect(base_url().'admin');
		}
	}











	public function getAllRegistered()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {

				

				$data['getAllRegistered'] = $this->Admin_model->getAllRegistereds();


				// $this->session->set_flashdata('Error', "Yoooo");
				$this->load->view('admin/viewallreports', $data);
				// $this->load->view('admin/valid');
			} else {

				$this->session->set_flashdata('Error', "You do not have access to validate");
				redirect(base_url().'admin');
			}
		} else {

			$this->session->set_flashdata('Error', "You do not have access to validate");
			redirect(base_url().'admin');
		}
	}









	public function getAllSpecialPosting()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {

				

				$data['getAllRegistered'] = $this->Admin_model->getAllSpecialPosting();


				// $this->session->set_flashdata('Error', "Yoooo");
				$this->load->view('admin/specialposting', $data);
				// $this->load->view('admin/valid');
			} else {

				$this->session->set_flashdata('Error', "You do not have access to validate");
				redirect(base_url().'admin');
			}
		} else {

			$this->session->set_flashdata('Error', "You do not have access to validate");
			redirect(base_url().'admin');
		}
	}







	public function getAllRegisteredByAdmin()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {

				

				$data['getAllRegistered'] = $this->Admin_model->getAllRegisteredByAdmin();


				// $this->session->set_flashdata('Error', "Yoooo");
				$this->load->view('admin/viewallreports', $data);
				// $this->load->view('admin/valid');
			} else {

				$this->session->set_flashdata('Error', "You do not have access to validate");
				redirect(base_url().'admin');
			}
		} else {

			$this->session->set_flashdata('Error', "You do not have access to validate");
			redirect(base_url().'admin');
		}
	}







	public function validatestudent()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {

				

				// $data['viewsearch'] = $this->Admin_model->viewsearch();


				// $this->session->set_flashdata('Error', "Yoooo");
				$this->load->view('admin/validatestudent');
				// $this->load->view('admin/valid');
			} else {

				$this->session->set_flashdata('Error', "You do not have access to validate");
				redirect(base_url().'admin');
			}
		} else {

			$this->session->set_flashdata('Error', "You do not have access to validate");
			redirect(base_url().'admin');
		}
	}








	public function registerstudent()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {

				
				$indexnumber = $_POST['validation-index-number'];
				$surname = $_POST['surname'];
				$firstname = $_POST['firstname'];
				$dob = $_POST['dob'];


				$data = $this->Admin_model->registerstudent($indexnumber,$surname,$firstname,$dob);

				if ($data == "norecord") {

					$this->session->set_flashdata('Error', "Student does not exit");
					redirect(base_url().'admin/validatestudent');

				}elseif ($data == 1) {
					$this->session->set_flashdata('Success', "Student successfully resgisted");
					redirect(base_url().'admin/validatestudent');
				}else{
					$this->session->set_flashdata('Error', "invalid user");
					redirect(base_url().'admin/validatestudent');
				}
			} else {

				$this->session->set_flashdata('Error', "You do not have access to validate");
				redirect(base_url().'admin');
			}
		} else {

			$this->session->set_flashdata('Error', "You do not have access to validate");
			redirect(base_url().'admin');
		}
	}









	public function enrollstudent()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {

				

				$data['getAllCourses'] = $this->Admin_model->getAllCourses();
				$data['getAllHouses'] = $this->Admin_model->getAllHouses();


				// $this->session->set_flashdata('Error', "Yoooo");
				$this->load->view('admin/enrollstudent',$data);
				// $this->load->view('admin/valid');
			} else {

				$this->session->set_flashdata('Error', "You do not have access to validate");
				redirect(base_url().'admin');
			}
		} else {

			$this->session->set_flashdata('Error', "You do not have access to validate");
			redirect(base_url().'admin');
		}
	}









	



	public function executeregisterstudent()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {

				
				$indexnumber = $_POST['validation-index-number'];
				$course = $_POST['course'];
				$school = $_POST['school'];
				$accommodation = $_POST['accommodation'];
				$housenumber = $_POST['housenumber'];


				$data = $this->Admin_model->executeregisterstudent($indexnumber,$course,$housenumber,$accommodation,$school);

				if ($data == "recordexist") {

					$this->session->set_flashdata('Error', "Student Already exit");
					redirect(base_url().'admin/enrollstudent');

				}elseif ($data == 1) {
					$this->session->set_flashdata('Success', "Student successfully Enrolled");
					redirect(base_url().'admin/enrollstudent');
				}else{
					$this->session->set_flashdata('Error', "invalid user");
					redirect(base_url().'admin/enrollstudent');
				}
			} else {

				$this->session->set_flashdata('Error', "You do not have access to validate");
				redirect(base_url().'admin');
			}
		} else {

			$this->session->set_flashdata('Error', "You do not have access to validate");
			redirect(base_url().'admin');
		}
	}

















	public function changepassword()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {


				// $data['changepassword'] = $this->Admin_model->changepassword();

				$this->load->view('admin/changepassword');
			} else {

				redirect(base_url().'auth/index');
			}
		} else {

			redirect(base_url().'auth/index');
		}
	}






	public function processchangepassword()
	{
		if (isset($_SESSION['Role']) && isset($_SESSION['UserId'])) {


			if ($_SESSION['Role'] == "Admin" && $_SESSION['UserId'] != null) {




				 $oldpassword = $this->test_input($_POST['validation-old-password']);
				 $newpasswprd = $this->test_input($_POST['validation-password']);

				$oldpasswprd = $this->test_input($_POST['validation-password-confirmation']);

				$changepassword = $this->Admin_model->changepassword($oldpassword, $newpasswprd);

				if ($changepassword['statusCode'] == 200) {

					$this->session->set_flashdata('success', $changepassword['message']);
					redirect(base_url().'admin/changepassword');
				} else {

					$this->session->set_flashdata('error', $changepassword['message']);
					redirect(base_url().'admin/changepassword');
				}
			} else {

				redirect(base_url().'auth/index');
			}
		} else {

			redirect(base_url().'auth/index');
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