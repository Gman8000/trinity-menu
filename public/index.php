<?php

$products = array(
  array(
    'name' => 'Espresso', 
    'description' => 'Our recipe varies with each single origin to bring out the most flavourful expresso possible',
    'price' => 22
  ),
  array(
    'name' => 'Africano', 
    'description' => 'Hot water with a double shot of our available single origin espresso',
    'price' => 23
  ),
  array(
    'name' => 'Espresso macchiato', 
    'description' => 'Double shot of our available single origin espresso with a stain of steamed milk',
    'price' => 24
  ),
  array(
    'name' => 'Cortado', 
    'description' => 'A stronger double shot of our available single origin espresso with equal partsteamed milk',
    'price' => 24
  ),
  array(
    'name' => 'Flat White', 
    'description' => 'A stronger double shot of our available single origin espresso with more steamed milk than foam',
    'price' => 27
  ),
  array(
    'name' => 'Cappuccino', 
    'description' => 'A double shot of our available single origin espresso with a third steamed milk topped with a third milk foam',
    'price' => 27
  ),
  array(
    'name' => 'Latte', 
    'description' => 'A double shot of our available single origin espresso with more steamed milk and less milk foam',
    'price' => 28
  ),
  array(
    'name' => 'Mocha', 
    'description' => 'A double shot of our available single origin espresso poured over chocolate topped with steam milk',
    'price' => 32
  )
);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Trinity Menu</title>
  </head>
  <body>
    <div class="page">
      <div class="header">
        <div class="logo"></div>
      </div>
      <div class="main-region">
        <div class="sidebar">
          <div class="menu-title">Menu</div>
        </div>
        <div class="content">
          <div class="section">
            <div class="section-title">Espresso<br/> classics</div>
            <?php foreach($products as $product) { ?>
            <div class="item">
              <div class="item-name"><?= $product['name'] ?></div>
              <div class="item-description"><?= $product['description'] ?></div>
              <div class="item-price">R <?= $product['price'] ?></div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
          

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>