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
		include "function.php";
		example("В матрице К(n,n) присвоить каждому диагональному элементу разность между суммами
элементов соответствующих строки и столбца.");
		$mass = array();
		echo "<br>";
		
		$mass = filingArr(8,8);
		echo "<br> Матрица ";
		outMass($mass);
		echo "<br> Матрица после преобразований";
		$mass = way($mass);
		outMass($mass);

		echo "<br><br><br>";

		example("Найти сумму элементов A(i,j) массива A(m,n), имеющих заданную разность индексов i-j=k. Число k целое, но не обязательно положительное.");
		$mass = filingArr(7,9);
		echo "Число k = 6 Сумма = ", summa($mass);

	 ?>



</body>
</html>