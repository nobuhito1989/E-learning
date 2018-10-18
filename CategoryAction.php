<?php 

require_once("admin/Category.php");
     require_once("admin/Validation.php");

      $category = new Category;
      $validation = new Validation;

      if(isset($_POST['add'])){
        $c_name= $_POST['c_name'];
    
        $msg = $validation->check_empty($_POST,array('c_name'));

        if($msg != null){
            session_start();
            //set error message
            $_SESSION['msg'] = $msg;
            //redirect url
            header("location: AdminCategory.php");
        }
        else{
        $category->createC_name($c_name);
        }
    }

    elseif($_GET['actiontype'] == 'delete'){
        $id = $_GET['id'];
        $category->deleteCategory($id);
        }




?>