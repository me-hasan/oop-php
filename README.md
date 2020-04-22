# oop-php
Object orient programming learning

## Basic uses
### add below this code into composer.json file
  ```json
{
    "require": {
        "k-hasan/oop-php":"dev-master"
    }
}
```
### add below this code into index.php file then run it.
  
  ```php
    require "vendor/autoload.php";


    $shop1 = new Product('Lux', 50, 'Toilet shopppp');
    $shop2 = new Product('Mariel', 40, 'Toilet shop');

    $shop3 = new Product('Nim', 20, 'Toilet shop');

    $gudam = new Stock([$shop2, $shop3]);

    $dhakaBazar = new Store($gudam);

    $dhakaBazar->requisition($shop1);

    echo '<pre>';

    print_r ($gudam);
```
    
