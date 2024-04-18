<?php
session_start();
if ($_SESSION["check"] == "isReviewer") {
    if ($_SERVER["REQUEST_METHOD"] == "POST") { {
            echo "<h1>Reviewer您好,歡迎查看論文評論結果</h1>";
            echo "<h3>論文評審決定：</h3>" . $_POST["decision"] . "<br>";
            echo "<h3>評語：</h3>" . nl2br(strip_tags($_POST["comment"])) . "<br>";
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
    <title>論文評論結果</title>
</head>

<body>
</body>

</html>