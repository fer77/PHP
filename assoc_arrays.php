<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $belcher = ["Bob", "Linda", "Tina", "Gene", "Louise"];

    print_r($belcher);

    echo "<br/>";

//Changing the index(0) for the label("bobs_friend"):
    $customer = ["bobs_friend" => "Teddy"];
    $children = ["first_belcher_kid" => "Tina", "second_belcher_kid" => "Gene", "third_belcher_kid" => "Louise"];

    print_r($customer);

    echo "<br/>";

//The first item in the array can be accessed by label:
    echo $customer["bobs_friend"];
    echo "<br/>";
    echo $children["second_belcher_kid"];

     ?>

  </body>
</html>
