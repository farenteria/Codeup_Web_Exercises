<?php
	echo "We don't need no education" . PHP_EOL;
	echo "We don't need no thought control" . PHP_EOL . PHP_EOL;

	$william = <<<SHAKESPEARE
All the world's a stage,
And all the men and women merely players:
They have their exits and their entrances;
SHAKESPEARE;

	echo $william . PHP_EOL . PHP_EOL;

	$firstName = "Joe";
	$lastName = "Blow";
	$address = "123 Any Street";

	echo "$lastName, $firstName, $address" . PHP_EOL . PHP_EOL;
	echo "{$firstName}{$lastName}{$address}" . PHP_EOL . PHP_EOL;
	echo "$firstName $lastName" . PHP_EOL . "$address" . PHP_EOL;
?>