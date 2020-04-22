<?php
    namespace Oop;

    use Oop\Item\Product;

    class Stock {

        protected $list = [];

        public function __construct($list = [])
        {
            $this->list = $list;
        }

        public function add(Product $product)
        {
            $this->list[] = $product;
        }

    }