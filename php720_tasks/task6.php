<?php 

$user_text = explode(" ",readline('Input: '));

if(count($user_text) == 3) {
	echo "Result {$user_text[0]} {$user_text[1][0]}. {$user_text[2][0]}. \n";
} else {
	echo "Incorrect input \n";
}

?>