<?php
    #引入dog.php來做繼承
    include "dog.php";
    #定義class_extends是 dog的子類別
    class class_extends extends dog{
        #除了原本dog定義的,可新增class_extends的屬性
        protected $age;

        public function __construct($name,$color,$style,$age){
            //繼承dog(父類別)的屬性
            parent::__construct($name,$color,$style);
            $this->age = $age;
        }
    public function dowork(){
        echo "趕羊...<br />";
    }
    #複寫解構子
    public function __destruct()
    {
        echo "趕羊到家了...";
    }

}
?>