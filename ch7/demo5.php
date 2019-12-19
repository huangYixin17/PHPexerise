<?php
abstract class A {
  public function sleep(){
      echo '睡';
  }
}
class Dog extends A {
  public function move(){
      echo '跑';
  }
}
class Bird extends A{
  public function move()
  {
      echo '飛';
  }
}
class Action{
  public function actionMove(b $obj)
  {
      $obj->move();
  }
}

$dog = new Dog();
$bird = new Bird();
$action = new Action();
$action->actionMove($dog);
$action->actionMove($bird);
?>