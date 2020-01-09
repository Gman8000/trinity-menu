<?php

$db_host = 'db';
$db_username = 'root';
$db_password = 'example';
$db_name = 'trinity';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if(!$conn) {
    die('could not connect' . mysql_error()); 
}

$result = $conn->query('SELECT * FROM product');
$products = $result->fetch_all(MYSQLI_ASSOC);
$conn->close();

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <title>Trinity Menu Items</title>
    </head>

    <body>
    <h1>Trinity Menu Items</h1>

    
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>

        <?php
            $i = 0;
            foreach($products as $product) {
                echo "<tr>";
                echo "<td>" . $product['name'] . "</td><td>" . strtolower(trim(($product['description']))) . "</td><td>" . strtolower(trim($product['price'])) . "</td>";
                echo "</tr>";
            $i++;
            }
        ?>
    </table>

    </body>
</html>