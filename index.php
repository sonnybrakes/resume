 <?php
// define constants
define('USE_FULL_NAME', TRUE);
define('YEAR', 2016);
define('TITLE', 'Full-Stack Web Developer');
// name variables
$first_name = "Mitch";
$last_name = "Frechette";

// city variables
$kapuskasing = "Kapuskasing";
$city = $kapuskasing;
$province = "Ontario";
$location = $city . " " . $province;

if( USE_FULL_NAME == TRUE ){
  $name = $first_name . ' ' . $last_name;
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

    <section>
      <pre><?php
        $a = TRUE;
        $b = FALSE;

        var_dump( $a and $b);
        var_dump( $a or $b and $a);
        var_dump( ! $a ); // not!

      ?></pre>

    </section>
  </body>
</html>
