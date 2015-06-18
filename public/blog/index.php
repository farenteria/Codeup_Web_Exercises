<?php
	include "data.php";

	//adds the same author and content to every post
	for($i = 0; $i < count($post); $i++){
		$post[$i]["author"] = $author;	
		$post[$i]["content"] = $content;		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>The Blog</title>
</head>
<body>
	<h1><?php include "header.php" ?></h1>

	<main><?php include "post.php" ?></main>

	<footer><?php include "footer.php" ?></footer>
</body>
</html>