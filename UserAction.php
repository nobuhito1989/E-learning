<?php 

require_once("admin/User.php");
     require_once("admin/Validation.php");

      $user = new User;
      $validation = new Validation;

         

         //adduser
         if(isset($_POST['add'])){
            $username= $_POST['username'];
            $password= $_POST['password'];
            $email= $_POST['email'];
        
            $msg = $validation->check_empty($_POST,array('username','password','email'));

            if($msg != null){
                session_start();
                //set error message
                $_SESSION['msg'] = $msg;
                //redirect url
                header("location: register.php");
            }
            else{
            $user->createUser($username,$password,$email);
            }
        }

        //loginuser
            elseif(isset($_POST['login'])){
                $username= $_POST['username'];
                $pass=$_POST['pass'];

                $password= md5($pass);
    
                $user->loginUser($username,$password);
            }

        //updateuser
            elseif(isset($_POST['edit'])){
                $id = $_POST['id'];
                $username= $_POST['username'];
                $firstname= $_POST['firstname'];
                $lastname= $_POST['lastname'];
       
                $user->updateUser($id,$username,$email);
                }
    
        
        //deleteuser
            elseif($_GET['actiontype'] == 'delete'){
            $id = $_GET['id'];
            $user->deleteUser($id);
            }


?>