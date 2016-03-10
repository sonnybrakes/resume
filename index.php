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
        $c = 20;
        $d = "10";

        var_dump( $a == $d);  // double == is equal in value only
        var_dump( $a === $b);  // triple === must be identical in value and in type
        var_dump( $a != $b); // not equal
        var_dump( $a !== $b); // not identical
      ?></pre>

    </section>
  </body>
</html>
