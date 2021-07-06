<?php

  $first_name = $_GET['first_name']; 
  $last_name = $_GET['last_name'];
  $address = $_GET['address'];
  $phone = $_GET['phone'];
  $cart = array();
  if(isset($_GET['item_0'])){
    array_push($cart, $_GET['item_0']);
   }
   if(isset($_GET['item_1'])){
    array_push($cart, $_GET['item_1']);
   }
   if(isset($_GET['item_2'])){
    array_push($cart, $_GET['item_2']);
   }
   if(isset($_GET['item_3'])){
    array_push($cart, $_GET['item_3']);
   }
   $totalCost = 0;

   $card = $_GET['card'];
   $exp_date = $_GET['exp_date'];
?>

<!DOCTYPE html>
<html lang = "en">
  <meta charset = "utf-8" />
  <title>Order Confirmation Page</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  
  <body>
    <header>

      <div class="topnav">
        <h1>Online Store</h1>
      </div>

    </header>

    <h1>Please Confirm Your Order</h1>
    <p><br />
      <?php
        //general info
        print "<h3>Name:</h3>$first_name $last_name<br />";
        print "<h3>Address:</h3>$address<br />";
        print "<h3>Phone Number:</h3>$phone<br />";

        //code to iterate through product list and display the proper price for each item
        print "<h3>Products in cart:</h3>";
        foreach ($cart as $product) {
          $price = 0;
          switch($product) {
            case "Bike":
              $price = 1000;
              $GLOBALS['totalCost'] += $price;
              print "$product - $<b>$price</b><br />";
              break;
            case "Car":
              $price = 18000;
              $GLOBALS['totalCost'] += $price;
              print "$product - $<b>$price</b><br />";
              break;
            case "Boat":
              $price = 14000;
              $GLOBALS['totalCost'] += $price;
              print "$product - $<b>$price</b><br />";
              break;
            case "Plane":
              $price = 50000;
              $GLOBALS['totalCost'] += $price;
              print "$product - $<b>$price</b><br />";
              break;
          }
        }
        //total cost
        print "<h3>Total Cost:</h3>$$totalCost<br />";
        //end of product list

        //card info
        print "<h3>Credit Card Type:</h3>$card<br />";
        print "<h3>Card Expiration Date:</h3>$exp_date<br />";

      ?>  
    </p>

  <form id="confirmOrCancel" action="assign11_a.php" method="GET">
    <button type="submit" name="submit" value="Submit">Submit</button>
    <button type="submit" name="submit" value="Cancel">Cancel</button>
  </form>
 
</body>
</html>