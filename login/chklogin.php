<?php

$default_user='tom';
$default_pw='0000';


$acc=$_POST['acc'];
$pw=$_POST['pw'];

$error='';



if ($acc != $default_user || $pw != $default_pw) {
    $error="帳號密碼錯誤";
    header("location:login.php?error=$error");
}else{
    header("location:memcenter.php?acc=$acc");
}

?>