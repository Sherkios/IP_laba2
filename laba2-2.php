<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css">
	<title>Грищенко Игорь</title>
</head>
<body>
	<a href="index.php">Главная</a> <br>
	<?php 
		$random_lenth = rand(3,20);
		$mass = array();
		for ($i=0; $i < $random_lenth  ; $i++) { 
			$mass[] = rand(10,99);
		}
		echo "Массив из $random_lenth элементов, заполненный случайными числами:";
		foreach ($mass as  $value) {
			echo "$value ";
		};

		echo "</br> Сортировка </br>";
		sort($mass);
		foreach ($mass as  $value) {
			echo "$value ";
		};

		echo "</br> Обратный порядок </br>";
		$mass = array_reverse($mass);
		foreach ($mass as  $value) {
			echo "$value ";
		};

		echo "</br> Удаление последнего элемента </br>";
		array_pop($mass);
		foreach ($mass as  $value) {
			echo "$value ";
		};

		echo "</br> Среднее арифметическое </br>";
		$countOfMass  = count($mass);
		$sumOfMass; 
		for ($i=0; $i < count($mass) ; $i++) { 
			$sumOfMass += $mass[$i];
		}
		$srArif = $sumOfMass / $countOfMass;
		echo "$srArif";

		echo "</br> Поиск значения 50 </br>";
		if (in_array(50, $mass)) {
			echo "50 есть в массиве";
		} else {
			echo "50 нет в массиве";
		}

		echo "</br> удаление повтора </br>";
		$mass = array_unique($mass);
		foreach ($mass as  $value) {
			echo "$value ";
		};
	 ?>
</body>
</html>