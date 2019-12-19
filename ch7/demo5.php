<?php
  abstract class ABC {
  public function sleep(){
      echo '睡';
  }
}
class Dog extends ABC {
  public function move(){
      echo '跑';
  }
}
class Bird extends ABC{
  public function move()
  {
      echo '飛';
  }
}
class Action{
  public function actionMove(ABC $obj)
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