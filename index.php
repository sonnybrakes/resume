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
        $array_example = array();
        $eye_color = array('blue', 'brown', 'green');
        print_r($eye_color);
        $eye_color[1] = 'hazel';
        echo $eye_color[1];
      ?></pre>
    </section>
  </body>
</html>
