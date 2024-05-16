<?php
session_start();

$id = '123';
$pwd = '456';


$userId = $_POST["userid"];
$userPwd = $_POST["password"];

$date = strtotime("+10 second",time());

if ($id == $userId && $pwd == $userPwd){
    $_SESSION["check"]="Yes";
    setcookie("userName", $userId, $date);
    header("Location: success.php");
}else{
    $_SESSION["check"]="No";
    header("Location: failed.php");
}
?>