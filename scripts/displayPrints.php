<?php
    include 'databaseQuery.php';
    

    class displayimage extends sqlConnection{

        public function display()
        {

            
            $result = $this->conn->query('SELECT * FROM prints');

            ?>
        	<div class="carousel-item active">
      			<img src="https://upload.wikimedia.org/wikipedia/en/9/95/Test_image.jpg" class="d-block w-100" style="width:auto;height:650px;margin-left: auto;
              margin-right: auto;" alt="...">
    		</div>
              <?php
              while($data = $result->fetch_array()){
                   
                   ?>
                    <div class="carousel-item">
      					<img src="assets/printImages/<?php echo $data['image']; ?>" class="d-block w-100" style="width:auto;height:650px;margin-left: auto;
              margin-right: auto;" alt="...">
                   		<div class="carousel-caption d-none d-md-block">
        					<h5> <?php echo $data['printName'];?> </h5>
        					<p><?php echo $data['description'];?> </p>
      					</div>
                   	</div>
                   <?php
   
   
               }
            ?>
        
        <?php

        }
        


    }


    
?>