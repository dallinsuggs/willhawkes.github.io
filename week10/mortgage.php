<?php

   //  This function reads the form "query string"
   //  
   // This function handles both an http "get".
   $field1 = $_GET['apr'] / 100; 
   $field2 = $_GET['loanTerm'];
   $field3 = $_GET['loanAmount'];
?>

<!DOCTYPE html>
<html lang = "en">
  <meta charset = "utf-8" />
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Mortgage Calculation Results</title>
  <body>
    <header>

      <div class="topnav">
        <h1>Loan Calculator</h1>
      </div>

    </header>

    <h2>Mortgage calculation: <br /></h2>
    <h3>
      <?php

        //calculation of payment
        $r = $field1 / 12;
        $n = 12 * $field2;
        $result = ($field3 * $r * pow((1 + $r), $n)) / (pow((1 + $r), $n) - 1);
        $payment = round($result, 2);

        //print values to page
        print "APR: $field1<br />";
        print "Term: $field2<br />";
        print "Amount: $field3<br />";
        print "Monthly Payment: $payment";

      ?> 
    </h3> 

    <footer>
      <p>Author: Dallin Suggs</p>
      <p><a href="mailto:dallin.suggs@gmail.com">dallin.suggs@gmail.com</a></p>
    </footer>
   
  </body>
</html>