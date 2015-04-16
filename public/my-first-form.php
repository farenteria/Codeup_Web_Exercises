<?php
	var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>My First HTML Form</title>
	</head>
	<body>
		<h2>User Login</h2>
		<form method="POST" action="/my-first-form.php">
			<p>
				<input id="username" name="username" type="text" placeholder="Username">
			</p>
			<p>
				<input id="password" name="password" type="password" placeholder="Password plz">
			</p>
			<p>
				<input name="submit" type="submit" value="Login">
			</p>
		</form>

		<h2>Compose an Email</h2>
		<form method="POST" action="/my-first-form.php">
			<p>
				<label for="to">To: </label>
				<input id="to" name="to" type="text">
			</p>
			<p>
				<!-- works the same as above version, but it less flexible. Must bre wrapped around input, while
				above version can be placed anywhere as long as it's lableled properly -->
				<label> From: 
					<input id="from" name="from" type="text">
				</label>
			</p>
			<p>
				<label for="subject">Subject: </label>
				<input id="subject" name="subject" type="text">
			</p>
			<p>
				<label for="body">Body: </label>
				<textarea id="body" name="body" type="textarea" rows="5" cols="40"></textarea>
			</p>
			<p>
				Give email to NSA?
			</p>
				<input type="checkbox" id="sign_up" name="sign_up" value="yes" checked>
				<label for="sign_up">Yes, ser!</label>			
			<p>
				<input type="submit" value="Send">
			</p>
		</form>

		<h2>Multiple Choice Test</h2>
		<form method="POST" action="/my-first-form.php">
			<h3>
				What is your favorite book?
			</h3>
			<label>
				<input type="radio" name="book" value="A Storm of Swords">
				A Storm of Swords
			</label>
			<label>
				<input type="radio" name="book" value="Harry Potter and the Half-Blood Prince">
				Harry Potter and the Half-Blood Prince
			</label>
			<label>
				<input type="radio" name="book" value="1984">
				1984
			</label>
			<label>
				<input type="radio" name="book" value="Animal Farm">
				Animal Farm
			</label>

			<h3>
				Favorite Band?
			</h3>
			<label>
				<input type="radio" name="band" value="The Contortionist">
				The Contortionist
			</label>
			<label>
				<input type="radio" name="band" value="The Ocean">
				The Ocean
			</label>
			<label>
				<input type="radio" name="band" value="UnexpecT">
				UnexpecT
			</label>
			<label>
				<input type="radio" name="band" value="He is Legend">
				He is Legend
			</label>

			<h3>
				Favorite Game?
			</h3>
			<label>
				<input type="radio" name="game" value="Smite">
				Smite
			</label>
			<label>
				<input type="radio" name="game" value="Sly 2: Band of Thieves">
				Sly 2: Band of Thieves
			</label>
			<label>
				<input type="radio" name="game" value="The Last of Us">
				The Last of Us
			</label>
			<label>
				<input type="radio" name="game" value="Smite">
				Smite
			</label>

			<h3>
				Great Places for Pizza?
			</h3>
			<label>
				<input type="checkbox" name="pizza[]" id="pizza1" value="Cicala's">
				Cicala's
			</label>
			<label>
				<input type="checkbox" name="pizza[]" id="pizza2" value="Peter Piper Pizza">
				Peter Piper Pizza
			</label>
			<label>
				<input type="checkbox" name="pizza[]" id="pizza3" value="Grimaldi's">
				Grimaldi's
			</label>
			<label>
				<input type="checkbox" name="pizza[]" id="pizza4" value="Main Street Pizza">
				Main Street Pizza
			</label>
			
			<h3>Favorite Teenage Mutant Ninja Turtle?</h3>
			<select id="turtles" name="turtles[]" multiple>
				<option value="0">Leonardo</option>
				<option value="1" selected>Michaelangelo</option>
				<option value="2">Raphael</option>
				<option value="3">Donatello</option>
			</select>

			<p>
				<input type="submit" value="Submit">
			</p>
		</form>

		<form method="POST" action="/my-first-form.php">
			<h2>Select Testing</h2>
			<label for="trick">Will you select "no"?</label>
			<select id="trick" name="trick">
				<option value="1" selected>Yes</option>
				<option value="0">No</option>
			</select>

			<p>
				<input type="submit" value="Submit">
			</p>
		</form>
	</body>
</html>