 <?php

include('assets/templates/header.php')


?>

<body>
		<div class="d-flex justify-content-center align-items-center container mt-5">
  			<div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
 	 			<div class="carousel-inner" >
 					
   	 				<?php include 'scripts/displayPrints.php';
            
            		$displayPrints = new displayimage;

           			$displayPrints->display();
            		?>
    
  				</div>
  				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
   					<span class="visually-hidden">Previous</span>
  				</button>
  				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
    				<span class="visually-hidden">Next</span>
  				</button>
			</div>
          </div>


           <!-- 
        	-->
            



</body>