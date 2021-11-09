<?php 

$servername = "strode-digital.uk";
$username = "harrison1";
$password = "0000";
$dbname = "harrisonTest";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}

$name = $_REQUEST['name'];

$sql = "INSERT INTO table1 (name) VALUES ('$name')";

if (mysqli_query($conn, $sql)){

    echo"<h3> Data Uploaded</h3>";

} else{
    echo "ERROR: oops $sql" . mysqli_error($conn);
}

mysqli_close($conn);

?>