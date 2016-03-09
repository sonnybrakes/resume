<?php
// names
define('YEAR', 2016);
define('TITLE', 'Full-Stack Web Developer');



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
      <pre><?php
        echo YEAR;

      ?></pre>
    </section>
  </body>
</html>
