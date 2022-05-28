
<?php

include_once ("connect/connect.php");

session_start();

$page = isset($_GET["page"]) ? $_GET["page"]: 1;
if($page == 0){
    header('Location: index.php');
}
$limit = 5;
$offset = $limit * ($page - 1);


?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITHub: best IT site</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap-grid.css">
</head>
<body>

    <header>
        <img class="col-12" width="100%" src="image/header.png">
        <div class="container-fluid menu mons-bold">
            <ul class="row">
                <li><a href="index.php">MAIN</a></li>
                <li><a href="category.php?id=2">IT</a></li>
                <li><a href="category.php?id=3">CRYPTO</a></li>
                <li><a href="category.php?id=4">WINDOWS</a></li>
            </ul>
        </div>
    </header>
    <?php if($_GET["page"] == 0){?>
    <div class="container-fluid last-post">
	    <div class="row ">
            <?php
                    $sql = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 1");
                    $row = $sql->fetch_assoc();
                ?>
	    	<div class="col-md-5 offset-md-1 col-xs-12">
	    		<img width="100%" src="<?=$row["img"]?>">
	    	</div>
	    	    <div class="col-md-4 offset-md-1 last-post-body">
	    		<p style="font-size: 10px;"class="mons-light">LATEST POST:</p>
	    		<p style="font-size: 32px;"class="man-extra"><?=$row["name"]?></p>
	    		<p class="man-light"><?=utf8_decode(mb_substr($row['text'], 0, 150, 'UTF-8'))?>.. <a href="post.php?id=<?=$row["id"]?>">read more</a></p>
	    	</div>
	    </div>
    </div>

    <hr>

    <div class="container-fluid text-center top-posts ">
        <p style="font-size: 16px;"class="col-md-4 mons-light">POPULAR POSTS:</p>
        <div class="row justify-content-center">
        <?php
            $sql = $db->query("SELECT * FROM posts ORDER BY views DESC LIMIT 2");
            while($row = $sql->fetch_assoc()){
        ?>
    	
    	<div class="col-md-5 col-xs-12 col-sm-12">
    		<img src="<?=$row["img"]?>"><br>
    		<a href="post.php?id=<?=$row["id"]?>"><p class="man-extra black d-inline"><?=$row["name"]?></p></a>
    	</div>
    <?php } ?>
    	</div>
    	</div>

        <div style="padding-top: 40px;"class="container-fluid text-center top-posts">
        <p style="font-size: 16px;"class="col-md-4 mons-light">FAVORITES POSTS:</p>
        <div class="row justify-content-center">
        <?php
            $sql = $db->query("SELECT * FROM posts ORDER BY likes DESC LIMIT 2");
            while($row = $sql->fetch_assoc()){
        ?>
        
        <div class="col-md-5 col-xs-12 col-sm-12">
            <img src="<?=$row["img"]?>"><br>
            <a href="post.php?id=<?=$row["id"]?>"><p class="man-extra black d-inline"><?=$row["name"]?></p></a>
        </div>
    <?php } ?>
        </div>
        </div>
    </div>

    <hr>
<?php }?>
    <?php

$sql = $db->query("SELECT * FROM posts LIMIT $limit OFFSET $offset");
while($row = $sql->fetch_assoc()){
    ?>


    <div class="container-fluid">
    	<div class="post-main">
    		<div class="row justify-content-center text-center">
	    		<div class="col-md-5 col-xs-12 col-sm-12 ">
	    			<img src="<?=$row['img']?>" width="100%">
	    		</div>
	    		<div class="col-md-4 offset-md-1 text-start post-main-body">
                    <a style="text-decoration: none;" class="post-main-body-link" href="post.php?id=<?=$row["id"]?>">
	    			<p class="man-extra black d-inline"><?=$row['name']?></p>
	    			<p class="man-light"><?=mb_substr($row['text'], 0, 150, 'UTF-8')?>.. <a href="post.php?id=<?=$row["id"]?>">read more</a>
	    		</div>
    		</div>
    	</div>
    </div>

    <?php } ?>
    </div>

    <div class="container-fluid">
	    <div class="row mons-light justify-content-center pages">
            <?php if($page !== 1){ ?>
    <a href="index.php?page=<?=$_GET["page"] - 1?>">Previus page</a>
<?php } ?>
<?php if ($sql->num_rows == $limit) {?>
<a href="index.php?page=<?=$page + 1?>">Next page</a>
<?php } ?>
    
	    </div>
    </div>

    <?php include_once('function/footer.php');?>					

    
</body>
</html>