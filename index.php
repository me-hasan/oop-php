
<?php

    require "vendor/autoload.php";

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    use Oop\Item\Product;
    use Oop\Stock;
    use Oop\Store;


    $shop1 = new Product('Lux', 50, 'Toilet shopppp');
    $shop2 = new Product('Mariel', 40, 'Toilet shop');

    $shop3 = new Product('Nim', 20, 'Toilet shop');

    $gudam = new Stock([$shop2, $shop3]);

    $dhakaBazar = new Store($gudam);

    $dhakaBazar->requisition($shop1);





    echo '<pre>';

    print_r ($gudam);