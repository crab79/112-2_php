<?php
echo "<h1>Sign-in Failed!</h1>";
echo "<h3>3秒後回到首頁</h3>";
header("Refresh:3;url=index.php");
?>