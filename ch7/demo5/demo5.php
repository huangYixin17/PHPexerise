<?php
include "ActionFromDemo5.php";
include "dogFromDemo5.php";
include "BirdFromDemo5.php";

$dog = new dogFromDemo5();
$bird = new BirdFromDemo5();
$action = new Action();
$action->actionMove($dog);
$action->actionMove($bird);
?>