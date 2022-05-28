<?php
include ("../connect/connect.php");
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A Basic HTML5 Template</title>
</head>
<body>
<form action="../function/addposts.php" method="POST">
    <input type="text" name="name" /></p>
    <input type="text" name="text" /></p>
    <input type="text" name="img" /></p>
    <?php
    $category_id = $db->query("SELECT * FROM category");
    while($data = $category_id->fetch_assoc()){
    ?>
    <input type="radio" name="category" value="<?=$data["id"]?>"><?=$data["name"]?><br />
    <?php }?>
    <input type="submit" value="Добавить">
</form>
</body>
</html>