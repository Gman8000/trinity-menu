<?php

$db_host = 'db';
$db_username = 'root';
$db_password = 'example';
$db_name = 'trinity';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if(!$conn) {
    die('Could not connect ' . mysql_error());
  }
  
  $result = $conn->query('SELECT * FROM product WHERE price > 25');
  $products = $result->fetch_all(MYSQLI_ASSOC);
  $conn->close();

?>

<!doctype html>
<html lang="en">
    <head>
    <meta charset="uft-8">
    <meta name ="viewport" content="width=devices, initial-scale=1, shrink-to-fit=no">
    <link rel ="stylesheet" href="styles.css">
    <title>Trinity list of products</title>
    </head>

    <body>
        <h1>Products more than R 25</h1>
        <ul>
            <?php foreach($products as $product) { ?>
                <li>
                <?php echo $product['id'] ?>
                <?php echo $product['name'] ?>
                </li>
            <?php } ?>
         </ul>
    </body>
</html>






