<?php

include('assets/templates/header.php')

?>

<body>

    <img src="assets/images/froger.jpg"></img>
    <form action="scripts/databaseQuery.php" method="post">
        <div class="form-group">
            <label for="exampleInputPassword1">name</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="name" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>