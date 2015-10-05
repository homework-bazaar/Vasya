<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Палиндром</title>
</head>
<body>
	<?php
		error_reporting(-1);
		mb_internal_encoding('utf-8');

		$text = "НаЖаЛ КаБаН На БаКлАжАн";
		$result = "palindrom";

		$text = mb_strtolower($text);
		$count=0;


		for ($i=0; $i <= mb_strlen($text); $i++) { 
			$symbol = mb_substr($text, $i, 1);
			

			if ($symbol == ' ') {
				$text = mb_substr($text, 0, $i) . mb_substr($text, $i+1);
			}
		}
		for ($i=0; $i < (mb_strlen($text)); $i++) { 
			$character = preg_split("//u", $text);
			 if($character[$i+1] == $character[mb_strlen($text) - $i]){
			 	$count++;
			 }
			
		}
		 if($count == mb_strlen($text)){
		 	echo "It,s a {$result}";
		 }else{
		 	echo "No palindrom";
		 }
	?>
</body>
</html>