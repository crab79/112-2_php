<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chair的論文網頁</title>
</head>
<body>
    
</body>
</html>

<?php
session_start();
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="isChair"){
        echo "<h1>Chair您好,歡迎進入論文網頁</h1>";
        echo "<a href='logout.php'>log-out</a><br>";
    }else{
        echo "<h1>Sign-in Illegally!</h1>";
        echo "<h3>3秒後回到首頁</h3>";
        header("Refresh:3;url=index.php");        
    }
}else{
    echo "<h1>Sign-in Illegally!</h1>";
    echo "<h3>3秒後回到首頁</h3>";
    header("Refresh:3;url=index.php");        
}
?>
