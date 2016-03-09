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
      <pre><?php
        $greeting = "Hello Friends!\n";
        $greeting{0} = "J";
        $secondary_greeting = "How are you today?\n";
        echo $greeting;
        echo $secondary_greeting;

        $bool = TRUE;
        var_dump($bool);
        $bool = FALSE;
        var_dump($bool);

        var_dump((bool) "");
        var_dump((bool) 0);
        var_dump((bool) 0.0);
        var_dump((bool) array());
        var_dump((bool) null);
      ?></pre>
    </section>
  </body>
</html>
