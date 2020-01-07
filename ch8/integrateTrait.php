<?php
    trait Hello{
        public function sayHello(){
            echo "Hello";
        }
    }
    trait World{
        public function sayWorld(){
            echo "World";
        }
    }
    trait HelloWorld{    
        use Hello,World;
    }
    trait MyHelloWorld {
        use HelloWorld;
    }
    $world = new MyHelloWorld();
    $world->sayHello." ".$world->sayWorld();
?>