<?php
	$adjectives = ["Red", "Small", "Wumbo", "Sliced", "Green", "Mean", "Cracked", "Dipped", "Browned"];
	$nouns = ["Blurpleberry", "Man", "Cheese", "Tomato", "Plant", "Computer", "Dorito", "Ghost", "Quentin Tarantino", "Movie"];

	function getNewAdj($adjectives){
		return $randAdj = $adjectives[rand(0, count($adjectives) - 1)];
	}

	function getNewNoun($nouns){
		return $randNoun = $nouns[rand(0, count($nouns) - 1)];
	}

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Server Name</title>
</head>
<body>
	<h1>Your new server name is:</h1>
	<p><?php echo "$randAdj $randNoun" . PHP_EOL; ?></p>
	<button id="button" name="button">New Name</button>
</body>
</html>