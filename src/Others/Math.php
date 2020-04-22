<?php
    namespace Oop\Others;

    class Math {


        const age = 1;

//        public function birthday()
//        {
//            static::$age += 1;
//        }

        public function show()
        {
            return static::$age;
        }



    }