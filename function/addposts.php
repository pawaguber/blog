<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A Basic HTML5 Template</title>
</head>
<body>
	<?php
	
	include ("../connect/connect.php");
	
	if(isset($_POST["name"]) && (isset($_POST["text"])) && isset($_POST["img"])){

		$category_id = $db->query("SELECT * FROM category");
		$category = $category_id->fetch_assoc();

		
		$name = $_POST["name"];
		$text = $_POST["text"];
		$img = $_POST["img"];
		$date = date('Y-m-d H:i:s');
		$category = $_POST["category"];
		print_r($category);
		
		$sql = $db->query("INSERT INTO posts (name, text, img, date, category_id) VALUES ('$name', '$text', '$img', '$date', '$category')");

		
		
	}
	
	?>
</body>
</html>