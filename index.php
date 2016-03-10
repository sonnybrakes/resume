 <?php
// define constants
define('USE_FULL_NAME', TRUE);
define('YEAR', 2016);
define('TITLE', 'Full-Stack Web Developer');
// name variables
$first_name = "Mitch";
$last_name = "Frechette";
$role = 'Teacher';
$role = "Student";
$role = 'Guest';
// city variables
$kapuskasing = "Kapuskasing";
$city = $kapuskasing;
$province = "Ontario";
$location = $city . " " . $province;

if( USE_FULL_NAME == TRUE ){
  $name = $first_name . ' ' . $last_name;
} else {
  $name = $first_name;
}

if( $role == 'Student'){
  $info = "I am a Student at Treehouse";
} elseif ( $role == 'Teacher') {
  $info = "I am a Teacher at Treehouse";
} else {
  $info = "I am a Guest of Treehouse";
}

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
    <h3><?php echo $info ?></h3>
    <section>
      <pre><?php

      ?></pre>

    </section>
  </body>
</html>
