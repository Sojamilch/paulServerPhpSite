<?php

include('assets/templates/header.php');
session_start();

?>
<body>
    <div class="d-flex justify-content-center align-items-center container mt-5" id="adminForm">
        <div class="row">
                <h1> Add a Painting </h1>
                <form method="post" action="scripts/dataSubmitController.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="paintingName" class="form-label">Painting Name</label>
                        <input name="paintingName" type="text" class="form-control" id="paintingName" aria-describedby="paintingNameHelp" placeholder="Enter painting name">
                        <small id="paintingNameHelp" class="form-text text-muted">whats the paintings name</small>
                    </div>
                    <div class="mb-3">
                        <label for="paintingDescription" class="form-label" >Paiting Description</label>
                        <input name="paintingDescription" type="text" class="form-control" id="paintingDescription" aria-describedby="descriptionHelp" placeholder="Enter Painting Description">
                    </div>
                    <div class="mb-3">
                        <label for="artistName" class="form-label" >Artist Name</label>
                        <input name="artistName" type="text" class="form-control" id="artistName" aria-describedby="artistHelp" placeholder="Enter Artist Name">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label" >Paiting Price</label>
                        <input name="paintingPrice" type="number" class="form-control" id="price" aria-describedby="pricehelp" placeholder="Enter Painting Price">
                    </div>
                    <div class="mb-3">
                        <label for="paintingSize" class="form-label" >Size</label>
                        <input name="paintingSize" type="text" class="form-control" id="paintingSize" aria-describedby="siezHelp" placeholder="Enter Painting Size">
                    </div>
                    <div class="mb-3">
                        <label for="paintingImage" class="form-label" >Upload Image</label>
                        <input name="paintingImage" type="file" class="form-control" id="paintingImage" accept="image/png, image/jpeg" >
                    </div>
                    <input type="submit" class="btn btn-primary" value="Upload" name="inputArtist"></input>
                    <div id="successMessage">
                        <?php if ($_SESSION['submitSuccess'] == 1) { $_SESSION['submitSuccess'] = 3;?>
                            <h1 style="color:green;">Input successful!</h1>
                        <?php } elseif ($_SESSION['submitSuccess'] == 0) { $_SESSION['submitSuccess'] = 3; ?>
                            <h1 style="color:red;"> Error Uploading Print!</h1>
                        <?php } elseif ($_SESSION['submitSuccess'] == 4) { $_SESSION['submitSuccess'] = 3;?>
                            <h1 style="color:red;"> Image Name Already Exists in Storage! (Rename Image file) </h1>
                        <?php } ?>
                        
                    </div>
                </form>
        </div>
    </div>
    <script>
        setTimeout(fade_out, 5000);
        function fade_out() {
            $("#successMessage").fadeOut().empty();
        }
    </script>
</body>