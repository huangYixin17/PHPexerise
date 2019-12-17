<?php
  include "override.php";

  $mydog = new override("Windy","白色","貴賓狗",30);
  //修改此行
  echo $mydog->Bark();
?>