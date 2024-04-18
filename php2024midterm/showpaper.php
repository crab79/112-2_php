<?php
session_start();
if ($_SESSION["check"] == "isAuthor") {
    if ($_SERVER["REQUEST_METHOD"] == "POST") { {
            echo "<h1>Author您好,歡迎查看論文投稿結果</h1>";
            echo "<h3>論文標題</h3>" . $_POST["paper_title"] . "<br>";
            echo "<h3>作者姓名</h3>" . $_POST["paper_author"] . "<br>";
            echo "<h3>您的電子郵件：</h3>" . $_POST["paper_email"] . "<br>";
            echo "<h3>您的論文摘要：</h3>" . nl2br(strip_tags($_POST["summary"])). "<br>";
            echo "<a href='logout.php'>log-out</a><br>";
        }
    } else {
        echo "<h1>Sign-in Illegally!</h1>";
        echo "<h3>3秒後回到首頁</h3>";
        header("Refresh:3;url=index.php");
    }
} else {
    echo "<h1>Sign-in Illegally!</h1>";
    echo "<h3>3秒後回到首頁</h3>";
    header("Refresh:3;url=index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>論文投稿結果</title>
</head>

<body>
</body>

</html>