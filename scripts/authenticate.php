<?php

session_start();

include 'databaseQuery.php';

class loginSystem extends sqlConnection 
{
    
    public function login($postData)
    {

        
        $stmt = mysqli_prepare("SELECT 'id', 'password' FROM 'users' WHERE 'username' = ?");
        
        mysqli_stmt_bind_param()



    }

}

$loginSystem = new loginSystem;

$loginSystem->login($_POST);