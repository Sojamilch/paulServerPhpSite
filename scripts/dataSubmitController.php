<?php

session_start();


include 'databaseQuery.php';
class submissionController extends sqlConnection {

    public function artistSubmission($postData){ //Submits the data that comes from the admin art page

        $paintingName = $postData['paintingName'];
        $aristName = $postData['artistName'];
        $price = $postData['paintingPrice'];
        $size = $postData['paintingSize'];
        $description = $postData['paintingDescription'];   


        $sql = "INSERT INTO `prints` (`artist_id`, `print_name`, `price`, `size`, `description`) VALUES ('$aristName', '$paintingName', '$price', '$size', '$description');";

        parent::executeQuery($sql);


    }

    
}


$submissionController = new submissionController;

if(isset($_POST['inputData']))
{

    $submissionController->artistSubmission($_POST);
    $_SESSION["submitSuccess"] = 1; 
    echo "<script> location.href = '../inputArtist.php';</script>";

}



?>