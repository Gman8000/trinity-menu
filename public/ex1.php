<?php

$db_host = 'db';
$db_username = 'root';
$db_password = 'example';
$db_name = 'trinity';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if(!$conn) {
  die('Could not connect ' . mysql_error());
}

$result = $conn->query('SELECT * FROM product WHERE price < 27');
$products = $result->fetch_all(MYSQLI_ASSOC);
$conn->close();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <title>Trinity List of Products</title>
  </head>
  <body>
    <h1>Products less than R 27</h1>
    <ul>
      <?php foreach($products as $product) { ?>
        <li>
          <?php echo $product['name'] ?>
        </li>  
      <?php } ?>
    </ul>
  </body>
</html>