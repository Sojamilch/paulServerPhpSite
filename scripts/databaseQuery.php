<?php 

$config = parse_ini_file('config/db.ini');

$conn = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['db']);

if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}


$name = $_REQUEST['name'];

$sql = "INSERT INTO table1 (name) VALUES ('$name');";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  

mysqli_close($conn);

?>