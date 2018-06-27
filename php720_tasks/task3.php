<?php 

$sum = 0;

for($i = 20; $i <= 45; $i++) {
	if(fmod($i, 5) == 0) {
		echo "Current number $i \n";
		$sum += $i;
	}
}

echo "Result: $sum \n";

?>