<?php
    include "Animal.php";
    class Action{
        public function actionMove(Animal $obj){
            $obj->move();
        }
    }
?>