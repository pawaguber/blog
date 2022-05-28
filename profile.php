<?php session_start(); 
if(!$_SESSION["profile"]){
    header('Location: login.php');
    include_once ("login/logout.php");
}?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A Basic HTML5 Template</title>
    <link rel="stylesheet" href="style/news.css">
</head>
<body>

<p>Твій логін: <strong><?= $_SESSION["profile"]["id"]?></strong></p>
<p>Post: <a href="http://91.134.182.72/index.php">post</a></p>

<form action="function/profile/changepass.php" method="POST">
    <input type="text" name="oldpass">
    <input type="text" name="newpass">
    <button type="submit">submit</button>

    <?php if($_SESSION["message"]){
        echo $_SESSION["message"];
    }
    unset ($_SESSION["message"]) ?>

    <p>Додати пост <a href=""></a></p>

    <a href="login/logout.php"> logout</a>

</form>

</html>