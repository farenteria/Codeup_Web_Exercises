<?php
	$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

	foreach ($things as $item) {
		if(is_int($item)){
			echo "Integer";
		} else if(is_float($item)){
			echo "Float";
		} else if(is_bool($item)){
			echo "Boolean";
		} else if(is_array($item)){
			echo "Array";
		} else if(is_null($item)){
			echo "Null";
		} else if(is_string($item)){
			echo "String";
		}

		echo PHP_EOL;
	}

	echo "Scalar values: ";

	foreach ($things as $item) {
		if(is_scalar($item)){
			echo "$item, ";
		}
	}

	echo PHP_EOL;

	echo "Printing out everything" . PHP_EOL . PHP_EOL;

	foreach ($things as $item) {
		if(is_array($item)){
			foreach ($item as $value) {
				echo "$value, ";

			}
		} else{
			echo $item;
		}

		echo PHP_EOL;
	}
?>