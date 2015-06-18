<?php foreach ($post as $article): ?>
	<article>
		<header>
			<h1><?= $article["title"]; ?></h1>
			by <?= $article["author"]; ?> &mdash; <?= $article["date"]; ?>
		</header>

		<p><?= $article["content"] ?></p>
	</article>
<?php endforeach ?>