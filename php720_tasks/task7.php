<?php 

$array = [];
$sum = 1;

for($i = 0; $i < 100; $i++) {
	$array[] = rand(1, 100);
	echo "Element $i: {$array[$i]} \n";
}

for($i = 0; $i < 100; $i++) {
	if($i%2 == 0) {
		$sum *= $array[$i];
	}
}

echo "Result: {$sum} \n";

?>