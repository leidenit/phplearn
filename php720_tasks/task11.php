<?php 

$colors = ["Крвсный", "Зелёный"];
$number = readline('Min (0 - 60): ');

if(is_numeric($number) && $number >= 0 && $number <= 60) {
	if($number % 5 < 3) {
		echo "Color {$colors[1]} \n";
	} else {
		echo "Color {$colors[0]} \n";
	} 
} else {
	echo "Incorrect input \n";
}
?>