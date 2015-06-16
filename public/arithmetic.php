<?php

	$a = 9;
	$b = 10;
	
	function add($a, $b)
	{
	    echo $a + $b . PHP_EOL;
	}

	function subtract($a, $b)
	{
	    echo $a - $b . PHP_EOL;
	}

	function multiply($a, $b)
	{
	    echo $a * $b . PHP_EOL;
	}

	function divide($a, $b)
	{
	    echo $a / $b . PHP_EOL;
	}

	function modulus($a, $b){
		echo $a % $b . PHP_EOL;
	}

	// Add code to test your functions here
	add(5, 5);
	subtract(5, 5);
	multiply(5, 5);
	divide(5, 5);
	modulus(5, 5);
?>