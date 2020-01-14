<?php
$account = $_POST["account"];
$password = $_POST["password"];
if($account != 123){
    echo "帳號或是密碼輸入錯誤!!";
}
else{
    echo "帳號 : ".$account;
    echo "密碼 : ".$password;
}

?>