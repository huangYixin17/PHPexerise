<?php
$account = $_POST["account"];
$password = $_POST["password"];
if($account != 123 or $password!= 1234){
    alert("123");
}
else{
    echo "登入成功!";
}

?>