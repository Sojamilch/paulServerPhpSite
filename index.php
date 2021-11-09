<?php

include('assets/templates/header.php')

?>

<body>

    <img src="assets/images/froger.jpg"></img>

    <div class="d-inline-flex p-2">
    <form action="scripts/databaseQuery.php" method="post">
        <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="name" placeholder="Password">
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>