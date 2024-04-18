<?php
session_start();
if (isset($_SESSION["check"])) {
    if ($_SESSION["check"] == "isAuthor") {
        echo "<h1>Author您好,歡迎進入論文投稿網頁</h1>";
        echo "<form action='showpaper.php' method='post'>
        <label for='paper_title'>論文標題</label>
        <input type='text' name='paper_title'>
        <label for='paper_author'>作者姓名</label>
        <input type='text' name='paper_author'>
        <label for='paper_email'>您的電子郵件：</label>
        <input type='email' name='paper_email'>
        <br></br>
        <label for='summary'>論文摘要：</label>
        <textarea name='summary' cols='30' rows='10'></textarea>
        <input type='submit' value='submit'>
        </form> ";
        echo "<a href='logout.php'>log-out</a><br>";
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
    <title>論文投稿網頁</title>
</head>

<body>
</body>

</html>
