<?php

include ('assets/templates/header.php');

if ($_SESSION['loggedin'] != TRUE) 
{
    echo"<script> location.href = 'index.php'</script>";
}

?>

<body>

     
    <div class="d-flex justify-content-center align-items-center container mt-5">


        <p> Username: <?php echo $_SESSION['name'] ?></p> 
        
        <p> ID:  <?php echo $_SESSION['id'] ?> </p>

    
    </div>


</body>