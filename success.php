<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <textarea name="comment" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="submit">
    </form>
<?php
session_start();
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
        echo "Sign-in Successfully!<br>";
        echo "<a href='logout.php'>log-out</a><br>";
        echo "<a href='login.html'>back to log-in page</a>";
        //header("Refresh:3;url=login.php");
    }else{
        echo "Sign-in Illegally!";
        header("Refresh:3;url=login.html");

    }
}else{
    echo "Sign-in Illegally!";
    header("Refresh:3;url=login.html");

}

echo "<br></br>";
echo addslashes(nl2br(htmlentities(strip_tags($_POST["comment"]))));
// above codes is a merge of addslashes(), nl2br(), htmlentities(), strip_tags()
?>
</body>
</html>

