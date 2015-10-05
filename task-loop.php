<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lesson Loop</title>
</head>
<body>
	<?php

error_reporting(-1);

$money = 10000;

for ($year = 16; $year <= 100; $year ++) {

	$percentPlus = $money / 10;
	$money = $money + $percentPlus;
	echo "На {$year} год своей жизни ты заработал {$money} руб. <br>";

	if($money >= 1000000){
      	echo "На {$year} год своей жизни ты заработал миллион <br>";   
        break;	
      }
	
   
}

?>
</body>
</html>