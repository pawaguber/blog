<?php
session_start();
$post_id = $_GET["id"];
include_once ("connect/connect.php");
include_once ("function/views.php");


//$view = $db->query("UPDATE posts SET views = views + 1 WHERE id = '$post_id'");
$sql = $db->query("SELECT * FROM posts WHERE id = '$post_id'");
$row = $sql->fetch_array(MYSQLI_ASSOC);

$sql = $db->query("SELECT name FROM category WHERE id = '".$row["category_id"]."'");
$category = $sql->fetch_array(MYSQLI_ASSOC);

if($sql->num_rows == 0){
  header('Location: 404.php');
}
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$row["name"]?> - ITHub</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap-grid.css">
    <?php include_once('function/header.php');?>


    <div class="container-fluid col-md-8 text-center post-body man-extra">	
         <img width="100%"src="<?=$row['img']?>" />

         <div class="row post-info man-light justify-content-between">

           <p>Category: <strong><?=$category["name"]?></strong></p>
           <p>Views: <strong><?=$row['views']?></strong></p>
           <p>Posted: <strong><?=$row["date"]?></strong></p>
         </div>	
         <div class="post-body-text text-start">
           <h1 class=""><?=$row["name"]?></h1>
           <p class="col-md-8 post-body-text man-extra"><?=utf8_decode($row["text"])?></p>
         </div>
    
   
	<?php include_once ("function/like.php"); ?>
  </div><br>
	<?php include_once ("function/comments.php"); ?>
  
	 <?php include_once('function/footer.php');?>
</body>
</html>