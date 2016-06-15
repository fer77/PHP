<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    // To prevent creating an infinite loop, always initialize with a $counter.

    $counter = 0;

    while($counter <= 10) {

      //echo "...hello for the " . $counter . " time." . "<br/>";
      echo $counter . "<br/>";
      $counter++;

    }

     ?>

  </body>
</html>
