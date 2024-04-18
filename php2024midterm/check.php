<?php
session_start();

$reviewer = "reviewer";
$author = "author";
$chair = "chair";

$chair_id = "chair";
$chair_pwd = "123";
$reviewer_id = "reviewer";
$reviewer_pwd = "234";
$author_id = "author";
$author_pwd = "345";

$user_role = $_POST["userrole"];
$userId = $_POST["userid"];
$userPwd = $_POST["password"];

$date = strtotime("+7 day",time());

if ($chair_id == $userId && $chair_pwd == $userPwd && $user_role == $chair){
    $_SESSION["check"]="isChair";
    setcookie("userName", $userId, $date);
    header("Location: chair.php");
}else if ($reviewer_id == $userId && $reviewer_pwd == $userPwd && $user_role == $reviewer){
    $_SESSION["check"]="isReviewer";
    setcookie("userName", $userId, $date);
    header("Location: reviewer.php");
}else if($author_id == $userId && $author_pwd == $userPwd && $user_role == $author){
    $_SESSION["check"]="isAuthor";
    setcookie("userName", $userId, $date);
    header("Location: author.php");
}else{
    header("Location: fail.php");
}
?>