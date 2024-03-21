<?php
session_start();

$id = 'a1091106';
$pwd = '1091106';


$userId = $_POST["user_acc"];
$userPwd = $_POST["user_paswd"];

if ($id == $userId && $pwd == $userPwd){
    $_SESSION["check"]="Yes";
    header("Location: form.php");
}else{
    $_SESSION["check"]="No";
    header("Location: failed.php");
}

?>