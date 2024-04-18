<?php
date_default_timezone_set("Asia/Taipei");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week5</title>
</head>

<body>
    <form action="check.php" method="post">
            <h1>高大資管論文投稿系統</h1>
            <label for="userrole">請選擇您的角色</label>
            <select name="userrole">
                    <option value="chair">Chair</option>
                    <option value="reviewer">Reviewer</option>
                    <option value="author">Author</option>
            </select>
            <label for="account">帳號</label>
            <input type="text" id="account" name="userid">
            <label for="pwd">密碼</label>
            <input type="password" name="password" id="pwd">
            <input type="submit">
    </form>
    <?php
    if (isset($_COOKIE["userName"])) {
        echo "Last Log-in Account: " . $_COOKIE["userName"];
    }
    ?>

</body>

<?php
include "include.inc";
?>

</html>
