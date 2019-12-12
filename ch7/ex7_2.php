<?php
/*如果不知道被引入的參數有幾個
可以用...來帶入
foreach表示把所有numbers內的變數都執行完
(變數1 as 變數2 ;將變數2 = 變數1)
*/
function sum(...$numbers){ 
    $total = 0;
    foreach($numbers as $i){
        $total = $total + $i;
    }
    return $total;
}
echo "sum : ".sum(1,3,5,7,9);
?>