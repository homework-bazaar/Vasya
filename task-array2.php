<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

		error_reporting(-1);

		$anonHeight = 175; /* Рост анона */

		/* Рост одноклассников анона */
		$classmates = array(
			'Антон'	=>	172,
			'Семен'	=>	165,
			'Лена'	=>	189,
			'Иван'	=>	171,
			'Петр'	=>	182,
			'Сидор'	=>	176,
			'Аня'		=>	180,
			'Таня'	=>	179,
			'Маня'	=>	171
		);

		$number = 0; /* Сколько человек в классе выше анона */

		/* Перебираем всех одноклассников */
		foreach ($classmates as $name => $height) {
		    echo "Имя: {$name}, рост: {$height} см.<br>";
		    if($height> $anonHeight){
		    	$number++;
		    }
		}

		echo "В классе {$number} человек выше анона\n";
	?>
</body>
</html>