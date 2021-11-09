<?php 

$servername = "localhost";
$username = "harrison1";
$password = "0000";
$dbname = "harrisonTest";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}


$name = $_REQUEST['name'];

$sql = "INSERT INTO table1 (name) VALUES ('$name');";


mysqli_close($conn);

?>