<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
Массив из случайных чисел на PHP
</title>
</head>
<body>
<?php
$par = 1;

echo '<p>Элементы с непарным индексом:</p><p>';

for ($i=0;$i<25;$i++) {
	$ar[$i] = rand(1, 100);
	
	if ($i % 2 == 0) {
		$par = $p * $ar[$i];
	} else {
	$k = ($i == 23) ? '</p>' : ', ';
	echo $ar[$i].$k;
	};
};

?>
</body>
</html>