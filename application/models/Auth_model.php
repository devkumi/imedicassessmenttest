<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        // $this->load->model('crud_model');
        // $this->load->model('login_model');
        // $this->load->library('session','upload');
        // $this->load->model('Endpoint_auth');
    }






    // public function processlogin($username, $password)
    // {

    // 	$username     = $_POST('validation-username');
    // 	$password = $_POST('validation-password');


    // 	$this->load->view('login');
    // }
    public function processadminlogin($email,$password)
    {
        
        


        $query = $this->db->query("SELECT * FROM `users` 
                                    inner join role on role.roleId=users.roleId 
                                    -- inner join school on school.schoolId=admin.schoolId 
                                    WHERE users.email='$email' and users.password='$password' and role.roleName = 'Super Admin' and users.adminStatus = 1");
        $AdminResult = $query->num_rows();
            // print_r($AdminResult);
        if ($AdminResult > 0) {
            $row = $query->row();
            $user_Id = $row->user_Id ;
            $number = $row->number;
            $email = $row->email;
            $name = $row->name;
            $surname = $row->surname;
            $teamId = $row->teamId;
            
            
            
            $_SESSION['UserId'] = $user_Id;
            $_SESSION['number'] = $number;
            $_SESSION['Email'] = $email;
            $_SESSION['name'] = $name;
            $_SESSION['surname'] = $surname;
            $_SESSION['teamId'] = $teamId;
            $_SESSION['Role'] = "Super Admin";

            return 1;
        }

        
        $query = $this->db->query("SELECT * FROM `users` 
                                    inner join role on role.roleId=users.roleId 
                                    -- inner join school on school.schoolId=admin.schoolId 
                                    WHERE users.email='$email' and users.password='$password' and role.roleName = 'User' and users.adminStatus = 1");
        $AdminResult = $query->num_rows();
            // print_r($AdminResult);
        if ($AdminResult > 0) {
            $row = $query->row();
            $user_Id = $row->user_Id ;
            $number = $row->number;
            $email = $row->email;
            $name = $row->name;
            $surname = $row->surname;
            $teamId = $row->teamId;
            
            
            


            $_SESSION['UserId'] = $user_Id;
            $_SESSION['number'] = $number;
            $_SESSION['Email'] = $email;
            $_SESSION['name'] = $name;
            $_SESSION['surname'] = $surname;
            $_SESSION['Role'] = "User";

            return 1;
        }




            return 0;



    }
    public function processlogin($indexnumber)
    {

        
        $date = date('Y');
        $query = $this->db->query("SELECT * from students 
        inner join course on course.courseCode = students.courseCode 
        inner join school on school.schoolId = students.schoolId 
        inner join houses on students.housenumber=houses.housenumber 
        where students.indexnumber='$indexnumber' and students.admissionyear='$date' ");
        $AdminResult = $query->num_rows();
        $AdminResulta = $query->result_array();

        // print_r($AdminResulta);
        // print_r($AdminResult);
        if ($AdminResult > 0) {

            // $row = $query->row();
            // // print_r($row);
            // $indexnumber = $row->indexnumber;
            // $schoolfrom = $row->schoolfrom;
            // $courseCode = $row->courseCode;
            // $gender = $row->gender;
            // $admissionyear = $row->admissionyear;
            // $schoolId = $row->schoolId;
            // $accommodation = $row->accommodation;
            // $schoolName = $row->schoolName;
            // // $courseCode = $row->courseCode;
            // $coursename = $row->coursename;
            // // set sessions
            // $_SESSION['indexnumber'] = $indexnumber;
            // $_SESSION['schoolfrom'] = $schoolfrom;
            // $_SESSION['courseCode'] = $courseCode;
            // $_SESSION['gender'] = $gender;
            // $_SESSION['admissionyear'] = $admissionyear;
            // $_SESSION['schoolId'] = $schoolId;
            // $_SESSION['accommodation'] = $accommodation;
            // $_SESSION['schoolName'] = $schoolName;


            // $data = 1;
            $AdminResulta["status"] = 200;
            return $AdminResulta;
        
        }else{
            return 0;
        }




        // $adminId = $_SESSION['UserId'];
        // $generateQrCode = "generateQrCode";
        // $obj = array(
        //     'indexnumber' => $indexnumber,
        //     'schoolId' => 100
        // );
        // $generateQrCode = $this->Endpoint_auth->fdaAdmin($generateQrCode, $obj);

        // // "nathing";

        // // var_dump($generateQrCode);

        // if ($generateQrCode['statusCode'] == 200) {

        //     // $_SESSION['number'] = $number;
        //     return $generateQrCode;
        // } else {
        //     // print_r($changepassword);
        //     return $generateQrCode;
        // }

        // return 0;
    }






    
    public function registerstudent($indexnumber,$surname,$firstname,$dob)
    {

        $query1 = $this->db->query("SELECT * FROM `students` WHERE indexnumber='$indexnumber'");
        $query1Result = $query1->num_rows();
            // print_r($AdminResult);
        if (!$query1Result) {

            return "paid";
        }


        $query = $this->db->query("SELECT * FROM `students` WHERE indexnumber='$indexnumber'");
        $AdminResult = $query->num_rows();
            // print_r($AdminResult);
        if ($AdminResult > 0) {
            $sql = "INSERT INTO `UPDATE`students` SET ` firstname='$firstname', surname='$surname', dob='$dob' where indexnumber='$indexnumber'";
            $result = $this->db->query($sql);

            if ($result) {

                $sql = "INSERT INTO `payments`(`studentId`, `amountpaid`) VALUES ('$indexnumber','20')";
                $result1 = $this->db->query($sql);

                return 1;
            } else {
            return false;
            }
        }

        return "norecord";
        
    }





    public function processforgotpassword($number, $username)
    {

        $adminId = $_SESSION['UserId'];
        $forgotPassword = "forgotPassword";
        $obj = array(
            'phoneNumber' => $number,
            'username' => $username,
            'key' => 'verify',
            'adminId' => $adminId,
            'auth' => $this->Endpoint_auth->get_auth()
        );
        $forgot = $this->Endpoint_auth->fdaAdmin($forgotPassword, $obj);

        // "nathing";

        if ($forgot['statusCode'] == 200) {

            $_SESSION['number'] = $number;
            return $forgot;
        } else {
            // print_r($changepassword);
            return $forgot;
        }
    }




    public function processresetpassword($password)
    {

        $adminId = $_SESSION['UserId'];
        $number = $_SESSION['number'];
        $forgotPassword = "forgotPassword";
        $obj = array(
            'newPassword' => $password,
            'phoneNumber' => $number,
            'key' => 'reset',
            'adminId' => $adminId,
            'auth' => $this->Endpoint_auth->get_auth()
        );
        $reset = $this->Endpoint_auth->fdaAdmin($forgotPassword, $obj);

        // "nathing";

        if ($reset['statusCode'] == 200) {

            // $_SESSION['number'] = $number;
            return $reset;
        } else {
            // print_r($changepassword);
            return $reset;
        }
    }
}