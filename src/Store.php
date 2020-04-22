<?php
    namespace Oop;

    use Oop\Item\Product;

    class Store {



        protected $stock;

        public function __construct(Stock $stock)
        {

            $this->stock = $stock;
        }

        public function requisition(Product $product){
            $this->stock->add($product);
        }

    }