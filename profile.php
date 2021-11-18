<?php

include ('assets/templates/header.php');

if ($_SESSION['loggedin'] != TRUE) 
{
    echo"<script> location.href = 'index.php'</script>";
}

?>

<body>

     
    <div class="d-flex justify-content-center align-items-center container mt-5">


    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"> <?php echo $_SESSION['id'] ?> </th>
                <th scope="row"> <?php echo $_SESSION['name'] ?></th>
            </tr>
        </tbody>
    </table>
 
    
    </div>


</body>