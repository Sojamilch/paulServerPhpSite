<?php

session_start();


include 'databaseQuery.php';
class submissionController extends sqlConnection {


    public function artistSubmission($postData){ //Submits the data that comes from the admin art page


        
        $_SESSION["submitSuccess"] = 3;


        $paintingName = $postData['paintingName'];
        $aristName = $postData['artistName'];
        $price = $postData['paintingPrice'];
        $size = $postData['paintingSize'];
        $description = $postData['paintingDescription'];   

        $filename = $_FILES['paintingImage']['name'];
        $tempname = $_FILES['paintingImage']['tmp_name'];

        $filePath = '../assets/printImages/'.$filename;

        $file_parts = pathinfo($filename);
        if($file_parts['extension'] == 'png'){
            if(move_uploaded_file($tempname, $filePath))
            {
                
                $_SESSION["submitSuccess"] = 1; 
                $stmt = $this->conn->prepare("INSERT INTO `prints` (`artistName`, `printName`, `price`, `size`, `description`, `image`) VALUES (?, ?, ?, ?, ?, ?)");

                $stmt->bind_param("ssssss", $aristName, $paintingName, $price, $size, $description, $filename);

                $stmt->execute();

            } else {

                $_SESSION["submitSuccess"] = 0; 
                
            }

        } else {

            $_SESSION["submitSuccess"] = 0;
        }
        

        
        //$sql = "INSERT INTO `prints` (`artistName`, `printName`, `price`, `size`, `description`) VALUES ('$aristName', '$paintingName', '$price', '$size', '$description')";

        //parent::executeQuery($sql);

    }

    public function createUser($postData)
    {
        $userName = mysqli_real_escape_string($this->conn, $postData['userName']);
        $emailAddress = mysqli_real_escape_string($this->conn, $postData['emailAddress']);
        $password = mysqli_real_escape_string($this->conn, $postData['password']);

        
      
        if (empty($userName) || empty($emailAddress) || empty($password)) {

            $_SESSION['submitSuccess'] = 0;
                
        } else { 
            
            $password = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $this->conn->prepare("INSERT INTO `users` (`username`, `password`, `email`) VALUES (?, ?, ?)");

            $stmt->bind_param("sss", $userName, $password, $emailAddress);
            
            $stmt->execute();
            
            $_SESSION["submitSuccess"] = 1;
        
        
        
        
        }
        //$sql = "INSERT INTO `users` (`username`, `password`, `email`) VALUES ('$userName', '$password', '$emailAddress');";

       
        //parent::executeQuery($sql);



    }

    
}


$submissionController = new submissionController;

if(isset($_POST['inputArtist']))
{

    $submissionController->artistSubmission($_POST);
    echo "<script> location.href = '../inputArtist.php';</script>";

}elseif(isset($_POST['createUser']))
{
    $submissionController->createUser($_POST);
     
    echo "<script> location.href = '../signup.php';</script>";


}



?>