<?php 

$user_text = readline('Input: ');
$sum = 0;

if(is_numeric($user_text) && (int) $user_text >= 0) {
	for($i = 0; $i < strlen($user_text); $i++) {
		$sum += $user_text[$i];
	}
	echo "Result $sum \n";
} else {
	echo "Incorrect input \n";
}

?>