<?php
// define constants
define('YEAR', 2016);
define('TITLE', 'Full-Stack Web Developer');
// name variables
$first_name = "Mitch";
$last_name = "Frechette";
$full_name = $first_name . " " . $last_name;
$name = $full_name;

// city variables
$kapuskasing = "Kapuskasing";
$city = $kapuskasing;
$province = "Ontario";
$location = $city . " " . $province;
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $name ?></title>
  </head>
  <body>
    <h1><?php echo $name ?></h1>
    <h2><?php echo $location ?></h2>

    <section>
      <pre><?php
        $a = 10;
        $b = 10;
        $sum = $a + $b;
        $diff = $a - $b;
        $product = $a * $b;
        $quotient = $a / $b;

        $product++;
      ?></pre>
      <ul>
        <li><?php echo $sum; ?></li>
        <li><?php echo $diff; ?></li>
        <li><?php echo $product; ?></li>
        <li><?php echo $quotient; ?></li>
      </ul>
    </section>
  </body>
</html>
