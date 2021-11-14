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
	echo "</br> Ассоциативный массив </br>";
		$cust = array("cnum" => "2001",
					"cname" => "Hoffman",
					"city" => "London",
					"snum" => "1001");
		foreach ($cust as $key => $value) {
			echo "$key = $value ";
		}

		echo "</br> Добавление значения </br>";
		$cust["rating"] = 100;
		foreach ($cust as $key => $value) {
			echo "$key = $value ";
		}

		echo "</br> Сортировка по значению </br>";
		asort($cust);
		foreach ($cust as $key => $value) {
			echo "$key = $value ";
		}

		echo "</br> Сортировка по ключу </br>";
		ksort($cust);
		foreach ($cust as $key => $value) {
			echo "$key = $value ";
		}

		echo "</br> Сортировка по sort() </br>";
		sort($cust);
		foreach ($cust as $key => $value) {
			echo "$key = $value ";
		}
	 ?>
</body>
</html>