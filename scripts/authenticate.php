<?php
session_start();
include 'databaseQuery.php';

class loginSystem extends sqlConnection 
{
    
    public function login($postData)
    {
        
        
        $stmt = $this->conn->prepare("SELECT id, password FROM users WHERE username = ?");
        //fetches the id and password thats related to the input username 
        $stmt->bind_param('s', $_POST['userName']);
        $stmt->execute();

        $stmt->store_result();
        //stores the result 

        if($stmt->num_rows() > 0){

            $stmt->bind_result($id, $password);
            $stmt->fetch();

            if(password_verify($postData['password'], $password))
            {

                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['userName'];
                $_SESSION['id'] = $id;
                echo "<script> location.href = '../index.php';</script>";
                $stmt->close();
                
                
                

            } else {
                // wrong password
                $_SESSION['passwordCheck'] = 1;
                echo "<script> location.href = '../login.php';</script>";
            }
                

        } else {

            //wrong username
            $_SESSION['passwordCheck'] = 1;
            $stmt->close();
            echo "<script> location.href = '../login.php';</script>";
            
        }
        
    
    }
    public function logout(){

        session_start();
        session_destroy();
    }

}

$loginSystem = new loginSystem;

if(isset($_POST['loginSystem']))
{

    $loginSystem->login($_POST); 

} else {
    $loginSystem->logout();
    echo "<script> location.href = '../index.php';</script>";
}


if($_SESSION['loggedin'] == TRUE){
   
}


?>