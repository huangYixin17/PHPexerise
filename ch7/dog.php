<?php
    class dog{
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
            echo "$this->name叫....";
        }
        public function __destruct()
        {
            echo "$this->name回家了....";
        }
                
    }
?>