<?php
$i = 150;
if($i >200){
    echo "\$i 大於200";
}elseif($i>=100){
    echo "\$i 大於100,小於200";
}else{
    echo "\$i 小於100";
}

?>
<?php
$fruit = "Apple";
switch($fruit){
    case "apple":
        echo "這是蘋果";
        break;
    case "banana":
        echo "這是香蕉";
        break;
    default:
        echo "打錯字了嗎?";
}
?>