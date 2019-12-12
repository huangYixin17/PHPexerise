<?php
function sum(...$numbers){
    $total = 0;
    foreach($numbers as $i){
        $total = $total + $i;
    }
    return $total;
}
echo "sum : ".sum(1,3,5,7,9);
?>