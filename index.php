<?php
// names
$first_name = "Mitch";
$last_name = "Frechette";
$full_name = $first_name . " " . $last_name;
$name = $full_name;

// city
$city = "Kapuskasing";
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
      <pre>
        <?php
          $one = 1.0;
          $two = 2;
          $three = 3;
          $string_one = "1";
          $distance_to_home = 1.2;
          $distance_to_school = 2.5;
         ?>
      </pre>
      <ul>
        <li><?php echo gettype($one); ?></li>
        <li><?php echo gettype($string_one); ?></li>
        <li><?php echo gettype($one + $two); ?></li>
        <li><?php echo gettype($distance_to_school + $distance_to_home); ?></li>
      </ul>
    </section>
  </body>
</html>
