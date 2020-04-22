# oop-php
Object orient programming learning

    ```require "vendor/autoload.php";

   


    $shop1 = new Product('Lux', 50, 'Toilet shopppp');
    $shop2 = new Product('Mariel', 40, 'Toilet shop');

    $shop3 = new Product('Nim', 20, 'Toilet shop');

    $gudam = new Stock([$shop2, $shop3]);

    $dhakaBazar = new Store($gudam);

    $dhakaBazar->requisition($shop1);





    echo '<pre>';

    print_r ($gudam);```
