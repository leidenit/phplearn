<?php 

$user_text = readline('Input: ');

if(is_numeric($user_text) && (int) $user_text >= 1 && $user_text <= 9999) {
	if(fmod($user_text, 4) == 0 && !(fmod($user_text, 100) == 0 && fmod($user_text, 400) != 0)) {
		echo "Year $user_text is ok! \n";
	} else {
		echo "Year $user_text is fail \n";
	}
} else {
	echo "Incorrect input \n";
}

?>