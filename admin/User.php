<?php 
require_once("Database.php");

class User extends Database{

   public function getUsers(){
       $sql = "SELECT * FROM users";

       $result = $this->conn->query($sql);

       return $result;

       $rows = array();

       while($row = $result->fetch_assoc()){
           $rows[] = $row;
       }
       
       return $rows;

   }

   public function getSpecificUser($id){

       $sql = "SELECT * FROM users WHERE user_id = $id";

       $result = $this->conn->query($sql);

       $row = $result->fetch_assoc();

       return $row;

   }

   public function createUser($username,$password,$email){
    $newpass = md5($password);
    $sql = "INSERT INTO users(username,password,email) VALUES('$username','$newpass','$email')";

    $result = $this->conn->query($sql) or die($this->conn->error);

        if($result){
         header("location: main.php");
        }

    }
    
   public function loginUser($username,$password){
             
            $sql = "SELECT * FROM users WHERE username = '$username' AND password= '$password'";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();

            if(($result->num_rows == 1)){
                $_SESSION['userid'] = $row['user_id'];
                header("location: http://localhost/portfolio/main.php");
            
            }else{
                $msg = "Username or Password or Email Adress is incorrect";
                return $msg;
            }
            

        }

        public function updateUser($id,$username,$email){

            $sql = "UPDATE users SET username='$username', email='$email' WHERE user_id = $id";
            $result = $this->conn->query($sql);

            
                if($result){
                header("location: AdminFormUsers.php");
            }else{
                echo "Connection Error: " . $this->conn->error;
            }
        
    }
        
        public function deleteUser($id){

        $sql= "DELETE FROM users WHERE user_id = $id";

        $result = $this->conn->query($sql);

            if($result){
          header('location:AdminFormUsers.php');
        }else{
          echo "Error: " . $sql . "<br>" . $this->$conn->error;
            }
    
}
        
    

  
















}






?>