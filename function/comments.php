<?php
session_start();
include_once ("../connect/connect.php");
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

<?php
if(isset($_POST["submit-comments"])){

    $login = $_SESSION["profile"]["login"];
    $text = $_POST["text"];
    $post_id = $_GET["id"];
    $sql = $db->query("INSERT INTO comments (login, text, post_id) VALUES ('$login', '$text', '$post_id')");
    header('Location: '.$_SERVER['REQUEST_URI']);

}

?>

<div class="container-fluid col-md-4 comments text-start">
    <form method="POST">
        <?php if($_SESSION["profile"]["id"]){ ?>
            <textarea name="text" class="mons-light"></textarea>
            <button style="padding-left: 20px; padding-right: 20px "class="black mons-light" name="submit-comments" type="submit">SEND</button>
        <?php }?>
    </form>
</div>


<?php
$comments = $db->query("SELECT * FROM comments WHERE post_id = '$post_id' ORDER BY id DESC");


while ($comment = $comments->fetch_assoc()){?>

    
    <div class="container-fluid col-md-4 text-start">
    <div style="margin-top: 25px;margin-bottom: 25px;"class="comments-list">
        <p style="line-height: 1px"class="mons-bold"><?=$comment["login"]; ?></p>
        <p class="comments-body mons-light"><?=$comment['text']?></p>
    </div>
    </div>
</div>
<?php } ?>

</body>
</html>