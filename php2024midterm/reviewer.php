<?php
session_start();
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="isReviewer"){
        echo "<h1>Reviewer您好,歡迎進入論文評論網頁</h1>";
        echo "<form action='showreview.php' method='post'>
        <label for='decision'>論文評審決定：</label>
        <input type='radio' name='decision' value='accept'>Accept
        <input type='radio' name='decision' value='minor_revision'>Minor Revision
        <input type='radio' name='decision' value='major_revision'>Major Revision
        <input type='radio' name='decision' value='reject'>Reject
        <br></br>
        <label for='comment'>評語：</label>
        <textarea name='comment' cols='30' rows='10'></textarea>
        <input type='submit' value='submit'>
        </form> ";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>論文評論網頁</title>
</head>
<body>


</body>
</html>

