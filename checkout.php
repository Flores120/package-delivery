<?php
    $firstName = $_GET["firstName"];
    $lasttName = $_GET["lastName"];
    $address = $_GET["address"];
    $input_weight = $_GET["weight"];
    $input_distance = $_GET["distance"];
    $shipping_price = calculator($input_weight, $input_distance);

    function calculator($weight, $distance)
    {
      $price = ($distance/20 + $weight/20);
      return $price;
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Receipt</title>
  </head>
  <body>
    <h2>Checkout</h2>
    <p>Your Total will be <?php echo $shipping_price;?>$</p>
    <p>Thank you for shopping on my online store <?php echo "$firstName"; ?> <?php echo "$lasttName"; ?></p>
    <p>Your purchase of socks will be dilevered at <?php echo "$address";?>. Come again!!</p>
  </body>
</html>
