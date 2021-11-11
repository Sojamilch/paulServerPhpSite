<?php 


class sqlConnection {
  
  private $conn;

  public function __construct() //Connects to the database 
  {

    $config = parse_ini_file('config/db.ini');
    $this->conn = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['db']) or die(mysqli_error($this->conn));

  }

  public function executeQuery($sql) //Executes any query onto the database regardless of where it comes from
  {
    $query = mysqli_query($this->conn,$sql);
    
  }




}



?>