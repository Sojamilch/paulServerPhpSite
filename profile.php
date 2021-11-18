<?php

include ('assets/templates/header.php');

if ($_SESSION['loggedin'] != TRUE) 
{
    echo"<script> location.href = 'index.php'</script>";
}

?>

<body>

     
    <div class="d-flex justify-content-center align-items-center container mt-5">


        <h5> Username: <?php echo $_SESSION['name'] ?> </h5>
        <h5> ID:  <?php echo $_SESSION['id'] ?> </h5>

    
    </div>


</body>