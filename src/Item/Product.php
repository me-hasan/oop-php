<?php
    namespace Oop\Item;

    class Product {

        protected $name;
        protected $price;
        protected $description;

        public function __construct($name, $price, $description)
        {
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
        }

    }
