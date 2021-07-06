<?php

  $result = $_GET['submit']; 

?>

<!DOCTYPE html>
<html lang = "en">
  <meta charset = "utf-8" />
  <title>Order Results Page</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  
  <body>
    <header>

      <div class="topnav">
        <h1>Online Store</h1>
      </div>

    </header>
    
    <h2><br />
      <?php
        if ($result == "Submit") {
          print "Congratulations! Your order has been placed!";
        }else {
          print "Your order has been canceled. How will you ever commute to work??";
        }
      ?>
    <h2>
  </body>
</html>