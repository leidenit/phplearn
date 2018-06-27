<?php 

$user_text = readline('Input: ');
$sum = 0;

if(is_numeric($user_text) && (int) $user_text > 0) {
	for($i = 0; $i <= (int) $user_text; $i++) {
		echo $i*$i . "\n";
		$sum += $i*$i;
	}
	echo "Result: $sum \n";
} else {
	echo 'Incorrect input';
}

?>