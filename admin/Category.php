<?php 
require_once("Database.php");

class Category extends Database{

    public function getCategory(){
        $sql = "SELECT * FROM categories";
 
        $result = $this->conn->query($sql);
 
        return $result;
 
        $rows = array();
 
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        
        return $rows;
 
    }





    public function createC_name($c_name){

        $sql = "INSERT INTO categories(c_name) VALUES('$c_name')";
    
        $result = $this->conn->query($sql) or die($this->conn->error);
    
            if($result){
             header("location: AdminCategory.php");
            }
    
        }

        public function deleteCategory($id){

            $sql= "DELETE FROM categories WHERE category_id = $id";
    
            $result = $this->conn->query($sql);
    
                if($result){
              header('location:AdminCategory.php');
            }else{
              echo "Error: " . $sql . "<br>" . $this->$conn->error;
                }
        
    }











}





?>