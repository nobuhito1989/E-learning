<?php 

     require_once("admin/Course.php");
     require_once("admin/Content.php");
     require_once("admin/Validation.php");

     $course = new Course;
     $content = new Content;
      $validation = new Validation;

      
      
      
      //addcourse
      if(isset($_POST['addcourse'])){
        $coursetitle= $_POST['course_title'];
        $coursedetail= $_POST['course_detail'];
        $coursedata= $_POST['course_data'];
    
        $msg = $validation->check_empty($_POST,array('course_title','course_detail','course_data'));

        if($msg != null){
            session_start();
            //set error message
            $_SESSION['msg'] = $msg;
            //redirect url
            header("location: courseform.php");
        }
        else{
        $course->createCourse($coursetitle,$coursedetail,$coursedata);
        }
    }









?>