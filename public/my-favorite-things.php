<?php
	$favorites = ["Programming", "Playing guitar", "Playing Smite", "Eating pizza", "Listening to music"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Favorites</title>
</head>
<body>
	<h1>These are a few of my favorite things</h1>
	<table>
		<?php
			foreach($favorites as $favorite):
				echo "<tr><td> $favorite </td></tr>";
			endforeach;
		?>
	</table>
</body>
</html>