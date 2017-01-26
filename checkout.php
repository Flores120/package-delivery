<?php $firstName = $_GET["firstName"]; ?>
<?php $lasttName = $_GET["lastName"]; ?>
<?php $address = $_GET["address"]; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Receipt</title>
  </head>
  <body>
    <h2>Checkout</h2>
    <p>Your Total will be 6.99</p>
    <p>Thank you for shopping on my online store <?php echo "$firstName"; ?> <?php echo "$lasttName"; ?></p>
    <p>Your purchase of socks will be dilevered at <?php echo "$address";?>. Come again!!</p>
  </body>
</html>
