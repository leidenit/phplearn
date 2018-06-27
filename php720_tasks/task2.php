<?php 

$card = Array("Четвёрка", "Пятёрка", "Шестёрка", "Семёрка", "Восмёрка", "Девятка", "Десятка", "Валет", "Дама", "Король", "Туз");
$user_text = readline('Input: ');

if(is_numeric($user_text) && (int) $user_text >= 4 && (int) $user_text <= 14) {
	echo "Result: {$card[(int) $user_text - 4]} \n";
} else {
	echo "Incorrect input \n";
}

?>