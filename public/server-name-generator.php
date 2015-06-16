<?php
	$adjectives = ["Red", "Small", "Wumbo", "Sliced", "Green", "Mean", "Cracked", "Dipped", "Browned"];
	$nouns = ["Blurpleberry", "Man", "Cheese", "Tomato", "Plant", "Computer", "Dorito", "Ghost", "Quentin Tarantino", "Movie"];
	$noun = $nouns[count($nouns) - 1];
	$adj = $adjectives[count($adjectives) - 1];

	function getNewAdj($adjectives){
		return $randAdj = $adjectives[rand(0, count($adjectives) - 1)];
	}

	function getNewNoun($nouns){
		return $randNoun = $nouns[rand(0, count($nouns) - 1)];
	}

	if(isset($_POST["submit"])){
		$adj =  getNewAdj($adjectives);
		$noun = getNewNoun($nouns);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Server Name</title>
</head>
<body>
	<h1>Your new server name is:</h1>
	<p><?php echo "$adj $noun" ?></p>
	<form method="POST" action="/server-name-generator.php">
		<input type="submit" name="submit" value="New Name">
	</form>
</body>
</html>