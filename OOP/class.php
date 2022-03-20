<?php

require_once 'classes/Product.php';

$product[] = $cola = new Product('Coca-Cola', 1, 180, 500);
$product[] = $pepsi = new Product('Pepsi-Cola', 0.75, 180, 380);
$product[] = $water = new Product('Bon-Aqua', 0.5, 100, 20);
$product[] = $juice = new Product('Kind', 1.25, 30, 100);
$product[] = $milk = new Product('TomskMilk', 0.8, 10, 30);

$findShelfLife = 30;

echo "<h1>Срок хранения больше $findShelfLife </h1>";

for ($i = 0; $i < 5; $i++)  //отбор и вывод продуктов со сроком хранения больше 30 дней
    if (($product[$i]->shelfLife) > $findShelfLife) {
        {
            echo $product[$i]->getProductInfo();
        }
    }

$findManufacturer = 'Bon-Aqua';

echo "<h1>Производитель $findManufacturer </h1>";

for ($i = 0; $i < 5; $i++)  //отбор и вывод продуктов Bon-Aqua
    if (($product[$i]->manufacturer) == $findManufacturer) {
        {
            echo $product[$i]->getProductInfo();
        }
    }

$findManufacturer2 = 'Coca-Cola';
$findManufacturer3 = 'Pepsi-Cola';
$checkValue = [$findManufacturer2, $findManufacturer3];

echo "<h1>Производитель Coca-Cola или Pepsi-Cola и цена меньше 1$ </h1>";

for ($i = 0; $i < 5; $i++) {
    $dist = $product[$i]->manufacturer;
    if (in_array($dist, $checkValue) && (($product[$i]->price) < 1)) {
        echo $product[$i]->getProductInfo();
    }
}

