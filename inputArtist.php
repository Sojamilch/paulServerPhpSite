<?php

include('assets/templates/header.php')

?>
<body>
    <div style="margin-left: 25%; margin-right: 25%; margin-top: 50px; " id="adminForm">
                <h1> Add a Painting </h1>
                <form method="post" action="/scripts/dataSubmitController.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="paintingName">Painting Name</label>
                        <input name="paintingName" type="text" class="form-control" id="paintingName" aria-describedby="paintingNameHelp" placeholder="Enter painting name">
                        <small id="paintingNameHelp" class="form-text text-muted">whats the paintings name</small>
                    </div>
                    <div class="form-group">
                        <label for="paintingDescription">Paiting Description</label>
                        <input name="paintingDescription" type="text" class="form-control" id="paintingDescription" aria-describedby="descriptionHelp" placeholder="Enter Painting Description">
                    </div>
                    <div class="form-group">
                        <label for="artistName">Artist Name</label>
                        <input name="artistName" type="text" class="form-control" id="artistName" aria-describedby="artistHelp" placeholder="Enter Artist Name">
                    </div>
                    <div class="form-group">
                        <label for="price">Paiting Price</label>
                        <input name="paintingPrice" type="number" class="form-control" id="price" aria-describedby="pricehelp" placeholder="Enter Painting Price">
                    </div>
                    <div class="form-group">
                        <label for="paintingSize">Size</label>
                        <input name="paintingSize" type="text" class="form-control" id="paintingSize" aria-describedby="siezHelp" placeholder="Enter Painting Size">
                    </div>
                    <div class="form-group">
                        <label for="paintingImage">Upload Image</label>
                        <input name="paintingImage" type="file" class="form-control" id="paintingImage" accept="image/png" >
                    </div>
                    <input type="submit" class="btn btn-primary" value="inputData" name="inputData"></input>
                </form>
            </div>
</body>