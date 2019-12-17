<?php
    include "Bark.php";
    abstract class dog implements Bark{
        public $name;
        public $color;
        public $style;
        
        #建立建構子
        public function __construct($name,$color,$style){
            $this->name = $name;
            $this->color = $color;
            $this->style = $style;
        }
        public function dogRun(){
            echo "$this->name 跑步中....";
        }
        public function dogBark(){
            #抽象化
        }
        public function __destruct()
        {
            echo "$this->name 回家了....";
        }
                
    }
?>