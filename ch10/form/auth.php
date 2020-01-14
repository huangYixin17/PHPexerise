<?php
$account = $_POST["account"];
$password = $_POST["password"];
if($account != 123 or $password!= 1234){
    function disp_alert() { 
        alert("你已成功輸入"); 
    } 
}
else{
    echo "登入成功!";
}

?>