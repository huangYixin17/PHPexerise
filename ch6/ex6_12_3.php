<?php
 $sum = 0;
 $i = 0;
 while($i<=50){
     $sum = $sum+$i;
     $i++;
 }
 echo "sum= $sum";

 $sum = 0;
 $i = 0;
 do{
     $sum = $sum+$i;
     $i++;
 }while($i<=50);
 echo "sum= $sum";
?>