<?php
session_start();
$post_id = $_GET["id"];
include_once ("connect/connect.php");

//$view = $db->query("UPDATE posts SET views = views + 1 WHERE id = '$post_id'");
$sql = $db->query("SELECT * FROM posts WHERE id = '$post_id'");
$row = $sql->fetch_array(MYSQLI_ASSOC);
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A Basic HTML5 Template</title>
  <link rel="stylesheet" href="style/news.css">
</head>
<body>
	<p><?=$row["name"]?></p>
	<p>Перегляди поста <?=$row['views']?></p>
	<img style="width:400px;" src="<?=$row['img']?>" />
	<p><?=$row["date"]?></p>
	<?php include_once ("function/like.php"); ?>
	<?php include_once ("function/views.php"); ?>
	<?php include_once ("function/comments.php"); ?>
</body>
</html>ё