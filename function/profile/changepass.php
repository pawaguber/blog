<?php

session_start();
include_once ("../../connect/connect.php");

$oldpass = $_POST["oldpass"];
$newpass = $_POST["newpass"];

$sql = $db->query("SELECT password FROM users WHERE id = '".$_SESSION["profile"]["id"]."'");
$data = mysqli_fetch_assoc($sql);
if($oldpass === $data["password"]){
    $sql = $db->query("UPDATE users SET password = '$newpass' WHERE login = '".$_SESSION["profile"]["login"]."'");
    header('Location: ../../profile.php');
    $_SESSION["message"] = 'cool';
}else{
	header('Location: ../../profile.php');
    $_SESSION["message"] = 'ne pidzodut';
}

?>