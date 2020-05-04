# oop-php
Object orient programming learning

## Installation
### command run into Terminal or Shell
    
```composer log
composer require k-hasan/oop-php;
```
## Or
### Add below this code into composer.json file
  ```json
{
    "require": {
        "k-hasan/oop-php":"dev-master"
    }
}
```

### command run into Terminal or Shell
```composer log
composer install
```

## Basic uses
### add below this code into index.php file then run it.
  
  ```php
    require "vendor/autoload.php";

    use Oop\Item\Product;
    use Oop\Stock;
    use Oop\Store;

    $product1 = new Product('Lux', 50, 'Toilet shopppp');
    $product2 = new Product('Mariel', 40, 'Toilet shop');

    $newProduct = new Product('Nim', 20, 'Toilet shop');

    $gudam = new Stock([$product1, $product2]);

    $dhakaBazar = new Store($gudam);

    $dhakaBazar->requisition($newProduct);

    echo '<pre>';

    print_r ($gudam);
```
    
