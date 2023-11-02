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
      $Number_Of_Topping = $_POST['Number_Of_Topping'];
      $Size = $_POST['Size'];
      if ($Size <= 4 and $Size >= 0){
        $Topping_Cost = ((Number_Of_Topping - 1) * 0.75) + 1;
        if $Size == ""
      }
      else{
        echo "You can only have toppings from 0-4!";
      }
    }
    else {
      echo "you must fill out both inputfields";
    }
    ?>
    
  </body>
  
</html>
