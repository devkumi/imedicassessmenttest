<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Superadmin_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        
        // $this->load->library('session','upload');
        
    }

    


    public function managefile()
    {

        $sql = "SELECT 

        file.fileId As file_fileId,
        file.userId As file_userId,
        file.filename As file_filename,
        date(file.dateCreated) As file_dateCreated,
        file.filesize As file_filesize,
        file.filetype As file_filetype,
        file.filepath As file_filepath,
        
        users.user_Id As users_user_Id,
        users.number As users_number,
        users.name As users_name,
        users.surname As users_surname,
        users.email As users_email,
        users.roleId As users_roleId,
        users.teamId As users_teamId

     

                
        FROM `file`

        inner join users on users.user_Id = file.userId

        -- where users.user_Id = '$_SESSION[UserId]'
        ";
        $query = $this->db->query($sql);
        // var_dump($query->result_array());
        return $query->result_array();
        
    }









    public function getalluser()
    {

        $sql = "SELECT * FROM `users`
        inner join role on role.roleId = users.roleId
        inner join teams on teams.teamId = users.teamId
        where users.roleId != 1";
        $query = $this->db->query($sql);
        // var_dump($query->result_array());
        return $query->result_array();
        
    }









    public function addcvcount($title ,$ext,$size ,$b64Doc)
    {


        $password = sha1("1234");
        $sql = "INSERT INTO `file` (  `filename`, `filesize`, `filetype`, `filepath`, `userId`) 
                                VALUES ('$title' , '$size', '$ext', '$b64Doc' , '$_SESSION[UserId]' )";
        $result1 = $this->db->query($sql);

        return 1;
       
        
    }






    



    public function adduser($name,$number,$role,$surname,$email)
    {

        $query1 = $this->db->query("SELECT * FROM `users` WHERE number='$number'");
        $query1Result = $query1->num_rows();
            // print_r($AdminResult);
        if (!$query1Result) {

            $password = sha1("1234");
            $sql = "INSERT INTO `users` ( `number`, `name`, `roleId`, `adminStatus`, `surname`, `email`, `password`) 
                                    VALUES ('$number' , '$name', '$role', '1','$surname' , '$email','$password' )";
            $result1 = $this->db->query($sql);

            return 1;
        }


        return "recordexist";
        
    }





    



    public function edituser($name,$number,$role,$surname,$email,$adminId)
    {

        $query1 = $this->db->query("SELECT * FROM `users` WHERE user_Id='$adminId' ");
        $query1Result = $query1->num_rows();
            // print_r($query1Result);
        if ($query1Result) {

            $sql = "UPDATE `users` SET `number`='$number',`name`='$name',`surname`='$surname',
                                        `email`='$email',`roleId`='$role' where user_Id = '$adminId'";
            $result1 = $this->db->query($sql);

            return 1;
        }


        return "recorddoesnotexist";
        
    }







    



    public function log($event)
    {

        $password = sha1("1234");
        $sql = "INSERT INTO `logs` ( `event`, `userId`) 
                                VALUES ( '$event', '$_SESSION[UserId]' )";
        $result1 = $this->db->query($sql);

    }







    



    public function activateadmin($adminId)
    {

        $query1 = $this->db->query("SELECT * FROM `users` WHERE user_Id='$adminId' ");
        $query1Result = $query1->num_rows();
            // print_r($query1Result);
        if ($query1Result) {

            $sql = "UPDATE `users` SET `adminStatus`='1' where user_Id = '$adminId'";
            $result1 = $this->db->query($sql);

            return 1;
        }


        return "recorddoesnotexist";
        
    }








    



    public function deactivateadmin($adminId)
    {

        $query1 = $this->db->query("SELECT * FROM `users` WHERE user_Id='$adminId' ");
        $query1Result = $query1->num_rows();
            // print_r($query1Result);
        if ($query1Result) {

            $sql = "UPDATE `users` SET `adminStatus`='0' where user_Id = '$adminId'";
            $result1 = $this->db->query($sql);

            return 1;
        }


        return "recorddoesnotexist";
        
    }





    public function reset($adminId)
    {

        $query1 = $this->db->query("SELECT * FROM `users` WHERE user_Id='$adminId' ");
        $query1Result = $query1->num_rows();

            // print_r($query1Result);
        $pass = sha1(1234);
        if ($query1Result) {

            $sql = "UPDATE `users` SET `password`='$pass' where user_Id = '$adminId'";
            $result1 = $this->db->query($sql);

            return 1;
        }


        return "recorddoesnotexist";
        
    }






    public function getallrole()
    {

        $sql = "SELECT * FROM `role`";
        $query = $this->db->query($sql);
        // var_dump($query->result_array());
        return $query->result_array();
        
    }


    
    
    
    
    public function managelogs()
    {

        $sql = "SELECT 
        
        logs.logid As logs_logid,
          logs.event As logs_event,
          logs.userId As logs_userId,
          logs.dateCreated As logs_dateCreated,
        users.name As name,
        users.surname As surname
        
        FROM `logs`
        INNER JOIN users on users.user_Id = logs.userId
        
        
        ";
        $query = $this->db->query($sql);
        // var_dump($query->result_array());
        return $query->result_array();
        
    }











    public function changepassword($oldpassword, $newpasswprd)
    {

        $oldpass = sha1($oldpassword);
        $newpass = sha1($newpasswprd);
        $query1 = $this->db->query("SELECT * FROM `users` WHERE user_Id='$_SESSION[UserId]' and password = '$oldpass'");
        $query1Result = $query1->num_rows();
            // print_r($query1Result);

        if ($query1Result) {

            $sql = "UPDATE `users` SET `password`='$newpass' where user_Id='$_SESSION[UserId]' ";
            $result1 = $this->db->query($sql);
            return 1;
        }
        return 0;
    }



}