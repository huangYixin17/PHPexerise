<?php
    include "Amimal.php";
    include "dogFromDemo5.php";
    include "BirdFromDemo5.php";
    class Action{
        public function actionMove(Amimal $obj){
            $obj->move();
        }
    }
?>