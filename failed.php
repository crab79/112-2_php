<?php
header("Refresh:1.5;url=login.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
    <script defer="defer" src="login.bundle.js"></script>
</head>
<body>
<div class="header">
        <h2 id="title">世芳軒</h2>
        <div class="nav">
            <a href="products.html">查看所有商品</a>
            <a href="login.html">登入</a>    
        </div>
    </div>
    <div class="content">  
        <form action="check.php" method="post">
            <?php echo "<h2 style='color: red;'>登入失敗！</h2>";?>
        </form>
    </div>
    <div class="footer">
        <h2 id="title">世芳軒</h2>
        <div class="info">
            <p>世芳軒(阿魯伯)花生糖</p>
            地址:<a href="https://maps.app.goo.gl/KtiLPeaQFf3zNzmS8">台南市安定區蘇林里227號</a>
            <p>營業時間:早上7點到晚上7點</p>
            <p>電話:(06)5921003</p>
        </div>
        <a href="index.html" id="footer-link">回到首頁</a>    
    </div>
</body>
</html>
