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

	$a = rand(-10,10);
	$b = rand(-10,10);

	function findWay($u,$t) {
		if ($u >= 0 and $t >= 0) {
		 	return $u + 2 * $t;
		 } elseif ($u < 0 and $t >= 0) {
		 	return $u + $t;
		 } elseif ($u >= 0 and $t < 0) {
		 	return $u * $u - 2 * $t;
		 } elseif ($u < 0 and $t < 0) {
		 	return $u * 3 + $t;
		 }
	}

	if (($b == 0) or (pow($a, 6)) == 0) {
		echo "Нельзя делить на 0";
	} else {
		$sum = findWay($a + (1 / $b),pow($b, 8) / pow($a, 6)) + findWay(pow($a, 3/4) - pow($b, 5/6), $b - $a);
		echo "Итог первого примера =  $sum";
	}
	echo "<br>";
	
	function find2Way($u,$t) {
		if ($u * $t < 1 / 2 ) {
		 	return ( 1 + cos($t - $u)) / ($u / $t + pow($t, 2));
		 } elseif ($u * $t >= 1 / 2 ) {
		 	return sin(log(abs($u / $t), 10));
		 }
	}

	if ($b == 0 or ($a/$b + pow($b, 2)) == 0 or ($a / $b) == 0 or $a - $b == 0) {
		echo "Нельзя делить на 0";
	} else {
		$sum = pow(cos(find2Way($a,$b)), 3) + find2Way($a + $b, $a - $b);
		echo "Итог второго примера =  $sum";
	}

			 
	 ?>



</body>
</html>