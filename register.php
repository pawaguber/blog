<?php 
session_start();
if($_SESSION["profile"]){
    header('Location: ../profile.php');
}


include_once ("connect/connect.php");


if(isset($_POST["login"]) && isset($_POST["password"])){

    $checklogin = $_POST["login"];

    $sql = $db->query("SELECT * FROM users WHERE login ='$checklogin'");

    $data = $sql->fetch_array(MYSQLI_ASSOC);

    if(!$data["login"]) {
        if (strlen($_POST["login"]) < 16 or strlen($_POST["login"]) > 2) {

            $login = $_POST["login"];
            //$password = md5(md5(trim($_POST["password"] . "43434")));
            $password = $_POST["password"];

            $db->query("INSERT INTO users (login, password) VALUES ('$login', '$password')");
            header('Location: ../login.php');
        }else{
            echo '--3';
        }
    }else{
        echo '-2';
    }
}else{
    echo '-1';
}

?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A Basic HTML5 Template</title>
  <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap-grid.css">
</head>
<body>
	
	<div class="container-fluid">
		<div class="login text-center">
	<form class="mons-light" method="POST">
		<input type="text" name="login" placeholder="Login"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<button style="color: white" class="mons-bold"type="submit">LOGIN</button>
	</form>
	<p class="mons-light">To register: <a href="register.php">click</a></p>
</div>

</html>