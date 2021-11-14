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
	$mass = array();
	$povtorMain=0;
	$numberPovtor;

	for ($i=0; $i < rand(10,100) ; $i++) { 
		$mass[] = rand(10,20);
	}

	for ($i=0; $i < count($mass) ; $i++) { 
		$povtor = 0;
		for ($k=0; $k < count($mass) ; $k++) { 
			if ($mass[$i] == $mass[$k]) {
				$povtor +=1;
				if ($povtor > $povtorMain) {
					$povtorMain = $povtor;
					$numberPovtor = $mass[$i];
				};
			}
		}
	}
	echo "Массив чисел </br>";
	foreach ($mass as  $value) {
			echo "$value ";
		}
	echo "</br> Количество повторяющегося числа $numberPovtor =  $povtorMain </br>";

	echo "Второе самостоятельное задание </br>";
	$arr = array();
	$sum = 0;

	for ($i=0; $i < rand(10,100) ; $i++) { 
		$arr[] = rand(-50,50);
	}

	for ($i=0; $i < count($arr) ; $i++) { 
		if ($arr[$i] > 0 and $arr[$i] % 2 == 1 ) {
			$sum += $arr[$i];
		}
	}
	echo "Массив чисел </br>";
	foreach ($arr as  $value) {
			echo "$value ";
		}

	echo "</br>Сумма не отрицательных и нечетных чисел = $sum </br>";
	 ?>
</body>
</html>