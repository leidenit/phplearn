<?php 

$array = [];
$max_index = 0;
$min_index = 0;
$buffer;

for($i = 0; $i < 10; $i++) {
	$array[] = rand(1, 10);
	echo "Element $i: {$array[$i]} \n";
}

for($i = 1; $i < 10; $i++) {
	if($array[$i] >= $array[$max_index]) {
		$max_index = $i;
	}

	if($array[$i] <= $array[$min_index]) {
		$min_index = $i;
	}
}

if($max_index != $min_index) {
	$buffer = $array[$max_index];
	$array[$max_index] = $array[$min_index];
	$array[$min_index] = $buffer;
}

echo "Max index: $max_index \n";
echo "Min index: $min_index \n";
echo "Result: ";

for($i = 0; $i < 10; $i++) {
	echo "{$array[$i]} ";
}

echo "\n";
?>