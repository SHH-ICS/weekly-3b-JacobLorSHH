<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    
    <?php
    $Cost = 0;
    if ( isset( $_POST['Size'] ) and isset( $_POST['Number_Of_Topping'])){
      $Size = $_POST['Size'];
      $Number_Of_Topping = $_POST['Number_Of_Topping'];
      if ($Number_Of_Topping > 0 and $Number_Of_Topping <= 4){
        $Topping_Cost = ($Number_Of_Topping - 1) * 0.75 + 1;
        if ($Size == 'Large'){
          $Cost += 6;
          echo $Topping_Cost + $Cost;
        }
        elseif ($Size == 'Extra Large'){
          $Cost += 10;
          echo $Topping_Cost + $Cost;
        }
        else{
          echo 'Size not available';
          echo 'Our available Sizes are Large and Extra Large';
        }
        
      }
      else{
        echo 'You can only have toppings between 0 and 4!';
      }
    }
    else{
      echo 'You must fill out both textfields before ordering!';
    }
    ?>
    
  </body>
  
</html>
