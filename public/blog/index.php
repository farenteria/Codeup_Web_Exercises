<?php
	include "data.php";

	for($i = 0; $i < count($post); $i++){
		$post[$i]["author"] = $author;	
		$post[$i]["content"] = $content;		
	}

	include "post.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>