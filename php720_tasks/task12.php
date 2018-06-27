<?php 

$number = readline('Rad (0 - 360): ');
$sum = 0;

if(is_numeric($number) && $number >= 0 && $number <= 360) {
	$sum = floor($number/30);
	echo "Result {$sum} \n";
} else {
	echo "Incorrect input \n";
}
?>