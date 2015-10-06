<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

		error_reporting(-1);

		/* Слоги, из которых составляется имя */
		$letters = array(
			1	=>	'ко',
			2	=>	'и',
			3	=>	'дзу',
			4	=>	'ми',
			5	=>	'са',
			6	=>	'ку',
			7	=>	'ра',
			8	=>	'да',
			9	=>	'чи',
			10	=>	'а',
			11	=>	'ки',
			12	=>	'ми',
			13	=>	'на',
			14	=>	'го',
			15	=>	'ха',
			16	=>	'ру'
		);

		/* В эту переменную запишем получившееся имя */
		$name = '';

		/* Гененрируем 4 слога */
		for ($i = 1; $i <= 4; $i++) {	
		    /* Выкидываем случайное число (count - число элементов в массиве) */
		    $random = mt_rand(1, count($letters)); 
		    $randomText = $letters[$random];
		    
		    echo "Выпало число {$random}, слог {$randomText} <br>";
		    /* Точка склеивает 2 строки в одну */
		    $name = $name . $randomText;
		}

		echo "------<br>";
		echo "Советую имя: {$name} - не прогадаешь!\n";
	?>
</body>
</html>