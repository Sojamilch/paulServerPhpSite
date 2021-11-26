
<?php
    include 'databaseQuery.php';
    

    class displayimage extends sqlConnection{

        public function display()
        {

            
            $result = $this->conn->query('SELECT * FROM prints');

            ?>
        
              <?php
              while($data = $result->fetch_array()){
                   
                   ?>
                   <div class="item">
                           <img style="width:auto;height:650px;margin-left: auto; margin-right: auto;" src="assets/printImages/<?php echo $data['image']; ?>"/>
                   </div>
                   <?php
   
   
               }
            ?>
        
        <?php

        }
        


    }


    
?>