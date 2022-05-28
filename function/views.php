<?php

include_once ("../connect/connect.php");
$post_id = $_GET["id"];
$ip = $_SERVER['REMOTE_ADDR'];

$sql = $db->query("SELECT * FROM post_views WHERE post_id = '$post_id' AND users_ip = '$ip'");


if($sql->num_rows < 1){
	$db->query("UPDATE posts SET views = views + 1 WHERE id = '$post_id'");
	$db->query("INSERT INTO post_views (post_id, users_ip, liked) VALUES ('$post_id', '$ip', 0)");
}
?>

<p></p>