<?php
  include "Bark.php";
  include "Swim.php";
  class Human implements Bark, Swim{
    public function bark(){
      echo "人類叫聲...是在叫什麼啦！！";
    }
    public function swim(){
      echo "人類在游泳...不是在洗澡嗎？";
    }
  }
?>