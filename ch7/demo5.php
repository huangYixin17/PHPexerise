<?php
  abstract class Aminal {
  public function sleep(){
      echo '睡';
  }
}
class Dog extends Aminal {
  public function move(){
      echo '跑';
  }
}
class Bird extends Aminal{
  public function move()
  {
      echo '飛';
  }
}
class Action{
  public function actionMove(Aminal $obj)
  {
      $obj->move();
  }
}

$dog = new Dog();
$bird = new Bird();
$action = new Action();
$action->actionMove($Dog);
$action->actionMove($Bird);
?>