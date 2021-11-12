<?php 

include 'assets/templates/header.php';
session_start();
?>
<body>
    <div class="d-flex justify-content-center align-items-center container mt-5" id="login form">
            <form action="/scripts/dataSubmitController.php" method="post">
            <div class="mb-3">
                <label for="inputUsername" class="form-label">User Name</label>
                <input name="userName" type="text" class="form-control" id="inputUsername" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="InputEmail" class="form-label">Email address</label>
                <input name="emailAddress" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                <div id="exampleInputPassword1" class="form-text">dont put anything secure, we didnt spend much on security</div>
            </div>
            <button type="submit" class="btn btn-primary" name="createUser">Submit</button>
            </form>
            <div id="successMessage">
                                <?php if ($_SESSION['submitSuccess'] == 1) { $_SESSION['submitSuccess'] = 0;?>
                                    <h1 style="color:green;">Account Created!</h1>
                                <?php } ?>
                                </div>
    </div>
    <script>
        setTimeout(fade_out, 5000);
        function fade_out() {
            $("#successMessage").fadeOut().empty();
        }
    </script>
</body>