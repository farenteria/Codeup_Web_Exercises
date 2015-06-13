<?php
	$classicNumbers = array(1, 2, 3, 4, 5);

	print_r($classicNumbers);

	$newNumbers = [1, 2, 3, 4, 5];

	print_r($newNumbers);

	echo $newNumbers[3] . PHP_EOL;

	$info = [		
		"firstName" => "Fernando",
		"lastName" => "Renteria",
		"email" => "Larry.Page@gmail.com",
		"phone" => "1-800-CALL-ATT"
	];

	var_dump($info);

	$test = [
		"person1" => $info,
		"person2" => [
			"firstName" => "Steven",
			"lastName" => "Wright",
			"email" => "existential.Jokes@gmail.com",
			"phone" => "555-555-5555"
		],
		"person3" => [
			"firstName" => "Robin",
			"lastName" => "Staps",
			"email" => "pelagic-records@gmail.com",
			"phone" => "1-800-WATER"
		]
	];

	var_dump($test);
?>