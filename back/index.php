<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A Basic HTML5 Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/news.css">
</head>
<body>

    <header>
    	<img src="image/header.png" alt="">
        <div class="row">
        <ul>
        	<li><a href="category.php?id=1">IT</a></li>
        	<li><a href="category.php?id=2">CRYPTO</a></li>
        	<li><a href="category.php?id=3">SOFT</a></li>
        </ul>
        </div>
    </header>
<?php

include_once ("connect/connect.php");

$page = isset($_GET["page"]) ? $_GET["page"]: 1;
$limit = 5 * $_GET["page"];
$offset = $limit + 5;
?>

<form action="search.php" method="POST">
    <input type="text" name="search" /></p>
    <button type="submit">SEARCH</button>
</form>

<?php

$sql = $db->query("SELECT * FROM posts LIMIT $limit, $offset");
while($row = $sql->fetch_assoc()){
    ?>

    <div class="center">
        <p>Назва=<?=mb_substr($row['name'], 0, 50, 'UTF-8')?>...</p>
        <p>Текст: <?=$row['text']?></p>
        <p><?=$row['id']?></p>
        <img style="width:100px;" src="<?=$row['img']?>" />
        <p>Подробнее <a href="post.php?id=<?=$row["id"]?>">жмяк</a></p>
    </div>
    <?php } ?>

    <?php if($_GET["page"] !== 0){ ?>
    <a href="news.php?page=<?=$_GET["page"] - 1?>">prevuis</a>
<?php } ?>
    <a href="news.php?page=<?=$_GET["page"] + 1?>">next</a>
</body>
</html>