<?php 
require_once("Database.php");

class Course extends Database{

   public function getCourse(){
       $sql = "SELECT * FROM course";

       $result = $this->conn->query($sql);

       return $result;

       $rows = array();

       while($row = $result->fetch_assoc()){
           $rows[] = $row;
       }
       
       return $rows;

   }

   

   public function createCourse($coursetitle,$coursedetail){

    $sql = "INSERT INTO course(course_title,course_details) VALUES('$coursetitle','$coursedetail')";

    $result = $this->conn->query($sql) or die($this->conn->error);

        if($result){

           $id = mysqli_insert_id($this->conn);
           $sql = "INSERT INTO course_content(course_id,course_data) VALUE('$id', '$coursedata')";
           $result = $this->conn->query($sql);
           if($result){
            header("location: AdminFormUsers.php");
           }
         
        }

    }

}








?>