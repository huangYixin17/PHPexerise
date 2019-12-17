<?php
    include "class_extends.php";
    $mydog = new class_extends("小溜","米白色","牧羊犬","10Y");
    echo $mydog->name."<br/>";
    echo $mydog->color."<br/>";   
    echo $mydog->style."<br/>";
    

    echo $mydog->dowork()."<br/>";
    echo $mydog->dogRun()."<br/>";


?>