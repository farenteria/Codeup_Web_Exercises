<?php
	include "data.php";

	//adds the same author and content to every post
	for($i = 0; $i < count($post); $i++){
		$post[$i]["author"] = $author;	
		$post[$i]["content"] = $content;		
	}

	//the header of our page
	include "header.php";

	//each post in our blog
	include "post.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>The Blog</title>
</head>
<body>

</body>
</html>