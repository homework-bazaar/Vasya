<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

		error_reporting(-1);

		$word1 = array('Чудесных', 'Суровых', 'Занятных', 'Внезапных', 'Прекрасных', 'Ужасных');
		$word2 = array('слов', 'зим', 'глаз', 'дней', 'лет', 'мир', 'взор', 'звон' , 'ртов', 'лиц', 'глав');
		$word3 = array('прикосновений', 'поползновений', 'судьбы явлений', 'осколков света', 'обрывков мрака',
		 'сухие листья', 'морщины смерти', 'долины края', 'замены нету', 'окраин мира', 
		'сухая юность', 'навек исчезнув', 'раздумий жизни');
		$word4 = array('обретаю', 'понимаю', 'начертаю', 'закрываю', 'оставляю',
		 'вынимаю', 'умираю', 'замерзаю', 'выделяю', 'потеряю', 'закрываю', 'убираю');
		$word5 = array('очертания', 'безысходность', 'начертанья', 'преткновенье', 'королевства', 'смысл жизни',
		 'вирус смерти', 'радость мира', 'ужас смерти', );

		echo $word1[mt_rand(0, count($word1)-1)] . " " . $word2[mt_rand(0, count($word2)-1)] . 
		" " . $word3[mt_rand(0, count($word3)-1)] . "<br>";
		echo $word1[mt_rand(0, count($word1)-1)] . " " . $word2[mt_rand(0, count($word2)-1)] . 
		" " . $word3[mt_rand(0, count($word3)-1)] . "<br>";
		echo "Я {$word4[mt_rand(0, count($word4)-1)] } {$word5[mt_rand(0, count($word5)-1)] }"
	?>
</body>
</html>