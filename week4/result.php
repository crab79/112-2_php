<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表單內容</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
        }
        
        h1,
        h2,
        h3,
        p {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h1>報名成功</h1>";
        echo "<h2>您的表單內容如下：</h2>";
        echo "<h3>基本資料</h3>";
        //echo "學號：" . $_POST["user_acc"] . "<br>";
        echo "電子郵件：" . $_POST["user_email"] . "<br>";
        //echo "密碼：" . $_POST["user_paswd"] . "<br>";
        echo "性別：" . $_POST["gender"] . "<br>";

        echo "<h3>想要吃的餐點</h3>";
        if (isset($_POST["user_food"])) {
            $foods = $_POST["user_food"];
            foreach ($foods as $food) {
                echo $food . "<br>";
            }
        }

        echo "<h3>晚會的相關細節</h3>";
        echo "晚會主題顏色：" . $_POST["user_color"] . "<br>";
        echo "晚會日期：" . $_POST["user_date"] . "<br>";
        echo "舉辦時間：" . $_POST["user_time"] . "<br>";
        echo "花費晚會週邊：" . $_POST["user_range"] . "元<br>";

        echo "<h3>您提議的dress code</h3>";
        if (isset($_POST["fashion"])) {
            $fashions = $_POST["fashion"];
            foreach ($fashions as $fashion) {
                echo $fashion . "<br>";
            }
        }

        echo "<h3>意見分享</h3>";
        echo "想法：" . $_POST["talking"] . "<br>";
        echo "<a href='logout.php'>log-out</a>";
    }
    ?>
</body>

</html>