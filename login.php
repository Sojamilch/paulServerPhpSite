<?php

include('assets/templates/header.php');
session_start();
?>

<body>
    <div class="d-flex justify-content-center align-items-center container mt-5" id="login form">
            <form action="/scripts/authenticate.php" method="post">
            <div class="mb-3">
                <label for="inputUsername" class="form-label">User Name</label>
                <input name="userName" type="text" class="form-control" id="inputUsername" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary" name="createUser">Login</button>
            </form>
</body>

