<?php 
	session_start();
if($_SESSION["profile"]){
    header('Location: ../profile.php');
}

session_start();

include_once ("connect/connect.php");


if(isset($_POST["login"]) && isset($_POST["password"])) {

    $login = $_POST["login"];
    $password = $_POST["password"];

    if (!empty($login) and !empty($password)) {
        $sql = $db->query("SELECT * FROM users WHERE login = '$login' and password = '$password'");
        if ($sql->num_rows > 0) {
            $data = $sql->fetch_array(MYSQLI_ASSOC);
            $_SESSION["profile"] = [
                "id" => $data["id"],
                "login" => $data["login"]
            ];
            header('Location: ../index.php');
        } else {
            echo "none";
            header('Location: ../login.php');
        }
    }else{
        echo '2';
    }
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