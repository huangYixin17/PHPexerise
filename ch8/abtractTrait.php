<?php
    trait Message{
        private $message;

        function alert(){
            $this->define();
            echo $this->message;
        }
        abstract function define();
    }
    class Messager{
        use Message;
        function define(){
            $this->message = "Custom Message";
        }
    }

    $messager = new Messager;
    $messager->alert();

?>
