<?php

session_start();


include 'databaseQuery.php';
class submissionController extends sqlConnection {


    public function artistSubmission($postData){ //Submits the data that comes from the admin art page


        $filePath = '../assets/images';



        $paintingName = $postData['paintingName'];
        $aristName = $postData['artistName'];
        $price = $postData['paintingPrice'];
        $size = $postData['paintingSize'];
        $description = $postData['paintingDescription'];   
        
        if(move_uploaded_file($_FILES['paintingImage']['tmp_name'], $filePath))
        {

            // 

        }




        $sql = "INSERT INTO `prints` (`artistName`, `printName`, `price`, `size`, `description`,'imageData') VALUES ('$aristName', '$paintingName', '$price', '$size', '$description')";

        parent::executeQuery($sql);

    }

    public function createUser($postData)
    {
        $userName = mysqli_real_escape_string($this->conn, $postData['userName']);
        $emailAddress = mysqli_real_escape_string($this->conn, $postData['emailAddress']);
        $password = mysqli_real_escape_string($this->conn, $postData['password']);

        
        $password = password_hash($password, PASSWORD_DEFAULT);

        
        $sql = "INSERT INTO `users` (`username`, `password`, `email`) VALUES ('$userName', '$password', '$emailAddress');";

       
        parent::executeQuery($sql);



    }

    
}


$submissionController = new submissionController;

if(isset($_POST['inputArtist']))
{

    $submissionController->artistSubmission($_POST);
    $_SESSION["submitSuccess"] = 1; 
    echo "<script> location.href = '../inputArtist.php';</script>";

}elseif(isset($_POST['createUser']))
{
    $submissionController->createUser($_POST);
    $_SESSION["submitSuccess"] = 1; 
    echo "<script> location.href = '../signup.php';</script>";


}



?>