<?php
	var_dump($_GET);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Favorite Meal</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<header>
			<h1>Cheese Pizza</h1>
		</header>
		<main>
			<h2>Ingredients</h2>
			<ul>
				<li>Cheese</li>
				<li>Sauce</li>
				<li>Love</li>
			</ul>
			<form method="GET" action="/favorite_meal.php">
				<p>
					<label for="text">Give us a suggestion of your favorite meal!</label>
					<input type="text" id="suggestion" name="suggestion">
				</p>
				<p>
					<input type="submit" value="Send">
				</p>
			</form>
		</main>
		<aside>
			<h3>Other foods you may like</h3>
			<ul>
				<li><a href="http://www.bk.com/menu-item/veggie-burger" title="BK's only vegeterian meal">Veggie Burger with Cheese from Burger King</a></li>
				<li><a href="http://www.traderjoes.com/digin/post/speculoos-cookie-butter-cheesecake" title="Don't live life without cookie butter">Cheesecake with Speculous Cookie Butter</a></li>
				<li><a href="http://www.chipotle.com/en-US/html/sofritas.html" title="Yum. Chipotle">Sofritas Burrito with the Fixins'</a></li>
			</ul>
		</aside>
	</body>
</html>