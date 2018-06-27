<?php 

$names = ["Крыса", "Бык", "Тигр", "Кролик", "Дракон", "Змея", "Лошадь", "Овца", "Обезьяна", "Петух", "Собака", "Свинья"];

$number = readline('Year (>1924): ');

if(is_numeric($number) && $number >= 1924) {
	echo "Result: {$names[($number - 1924) % 12]} \n"; 
} else {
	echo "Incorrect input \n";
}
?>