<?php
    class person{
        private $sex;
        /*
        public function __set($name,$value){
        
            if(isset($this->name)){
                return $this->$name = $value;
            }else{
                return null;
            }
        }
        */
    }
    public function __get($name){
        return $name;
    }
    public function __isset($name){
        return $name;
    }
    public function __unset($name){
        return name;
    }
    $person = new Person();
    //Person 類別沒有 name 這個屬性名稱
    //PHP_EOL 空隔或是換行
    $person->name = 'PHP';
    echo $person->name.PHP_EOL;
    // sex 這個屬性是無法取得的
    echo $person->sex.PHP_EOL;
    echo isset($person->address);
    unset($person->name);

?>