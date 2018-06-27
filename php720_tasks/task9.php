<?php 

$number = readline('Number: ');
$full = readline('Full: ');
$sum = 0;

if(is_numeric($number) && is_numeric($full) && $full > 1 && $number > 1) {
	for($i = 0; $i < strlen($number); $i++) {
		if($number[$i] == $full) {
			$sum++;
		}
	}
	echo "Result: $sum \n"; 
} else {
	echo "Incorrect input \n";
}
?>