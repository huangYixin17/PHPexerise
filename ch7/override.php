<?php
    include "dog.php";

    class override extends dog{
        protected $size;

        public function __construct($name,$color,$style,$size)
        {
            parent::__construct($name,$color,$style);
            $this->size = $size;
        }
        public function dogBark(){
            echo "$this->name 叫..但小聲<br/>";
            parent::dogBark();
        }
        
    }

?>