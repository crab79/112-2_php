<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="check.php" method="post">
        <fieldset>
            <legend>Sign-in</legend>
            <label for="user_acc">學號：</label>
            <input type="text" name="user_acc" id="user_acc" placeholder="請輸入您的學號" required>
            <label for="user_paswd">密碼：</label>
            <input type="password" name="user_paswd" id="user_paswd" placeholder="請輸入您的密碼" required>
            <input type="submit" value="Sign-in">
        </fieldset>
    </form>
</body>

</html>
<?php
date_default_timezone_set("Asia/Taipei");
echo date("y/m/d h/i/sa");
?>
