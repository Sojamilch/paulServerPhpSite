<?php

include 'databaseQuery.php';
class submissionController extends sqlConnection {

    public function artistSubmission($postData){ //Submits the data that comes from the admin art page

        $name = $postData['name'];

        $sql = $sql = "INSERT INTO table1 (name) VALUES ('$name');";

        parent::executeQuery($sql);


    }

    
}

$submissionController = new submissionController;

if(isset($_POST['inputData']))
{
    $submissionController->artistSubmission($_POST);
}



?>