<?php
include_once ("connect/connect.php");

$category_id = $_GET["id"];
$sql = $db->query("SELECT * FROM category WHERE id = '$category_id'");
$row = $sql->fetch_assoc();
if($sql->num_rows == 0){
  header('Location: 404.php');
}

?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Category: <?=$row["name"]?> - ITHub</title>
  <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap-grid.css">
</head>
<body>

	<header>
        <img class="col-12" width="100%" src="image/header.png"  alt="">
        <div class="container-fluid menu mons-bold">
            <ul class="row">
                <li><a href="index.php">MAIN</a></li>
                <li><a href="category.php?id=2">IT</a></li>
                <li><a href="category.php?id=3">CRYPTO</a></li>
                <li><a href="category.php?id=4">WINDOWS</a></li>
            </ul>
        </div>
    </header>

    <div class="col-md-5 text-center">
    	<p class="mons-bold">Category: <?=$row["name"] ?></p>
    </div>
    <?php
    $post = $db->query("SELECT * FROM posts WHERE category_id = '$category_id'");
while($row = $post->fetch_assoc()){
    ?>




    <div class="container">
        <div class="post-main">
            <div class="row text-center">
                <div class="image col-md-6 offset-md-1">
                    <img src="<?=$row['img']?>" width="500px" alt="">
                </div>
                <div class="col-md-3 text-start post-main-body">
                    <a style="text-decoration: none;" class="post-main-body-link" href="post.php?id=<?=$row["id"]?>">
                    <p class="man-extra black d-inline"><?=mb_substr($row['name'], 0, 50, 'UTF-8')?></p>
                    <p class="man-light"><?=mb_substr($row['text'], 0, 150, 'UTF-8')?>.. <a href="post.php?id=<?=$row["id"]?>">read more</a>
                    <div class="row">
                        <div class="post-main-category">
                            <p class="mons-light">Category: <strong>Windows</strong></p>
                        </div>
                        <div class="post-main-date">
                            <p class="mons-light">Date: <strong><?=$row["date"]?></strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    </div>
<footer>
    	<div class="container-fluid mons-light">
    		<div class="row">
    		<div class="col-md-2">
    			<p>ITHUB</p>
    		</div>
    		<div class="col-md-4 offset-md-6">
    		<ul class="row">
    			<li>MAIN</li>
    			<li>IT</li>
    			<li>CRYPTO</li>
    			<li>WINDOWS</li>
    			<li>CONTACTS</li>
    		</ul>
    		</div>
    		</div>
    	</div>
    </footer>
</body>
</html>