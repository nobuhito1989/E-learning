<?php 
require_once("Database.php");

class Content extends Database{

    public function getContent(){
        $sql = "SELECT * FROM course_content";
 
        $result = $this->conn->query($sql);
 
        return $result;
 
        $rows = array();
 
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        
        return $rows;
 
    }





    public function createContent($coursedata){

        $sql = "INSERT INTO course_content(course_data) VALUES('$coursedata')";
    
        $result = $this->conn->query($sql) or die($this->conn->error);
    
            if($result){
             header("location: AdminFormUsers.php");
            }
    
        }

        

}