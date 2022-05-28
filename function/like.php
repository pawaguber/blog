<?php

include_once("../connect/connect.php");
$post_id = $_GET["id"];
$ip = $_SERVER['REMOTE_ADDR'];

	if(isset($_POST["submit-like"])){
		$sql = $db->query("SELECT * FROM post_views WHERE post_id = '$post_id' AND users_ip = '$ip' AND liked = 1");
		if($sql->num_rows < 1){
        $db->query("UPDATE posts SET likes = likes + 1 WHERE id = '$post_id'");
        $db->query("UPDATE post_views SET liked = 1 WHERE post_id = '$post_id' AND users_ip = '$ip'");
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/bootstrap-grid.css">
</head>
<body>
	
</body>
</html>
<form method="post">
	<div class="row">
	<button style="padding-left: 20px; padding-right: 20px" name="submit-like" class="black mons-light" type="submit">LIKE</button>
	<?php
	$sql=$db->query("SELECT * FROM posts WHERE id = '$post_id'");
	$row = $sql->fetch_assoc();
	?>
	<p style="margin-left: 30px;"class="mons-light">Likes: <?=$row["likes"]?></p>
	</div>
</form>