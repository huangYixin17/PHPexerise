<?php
    class Base{
        public function sayHello(){
            echo "Hello";
        }
    }
    trait SayWorld{
        public function sayWorld(){
            parent::sayHello();
            echo "World!";
        }
    }
    class MyHelloWorld extends Base{
        use SayWorld;
    }
    $o = new MyHelloWorld();
    $o->sayHello();
?>