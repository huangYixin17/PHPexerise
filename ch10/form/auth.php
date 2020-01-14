<?php
$account = $_POST["account"];
$password = $_POST["password"];
if($account != 123 or $password!= 1234){
    echo "<script>alert(‘提示內容’)</script>";
else{
    echo "登入成功!"
}

?>