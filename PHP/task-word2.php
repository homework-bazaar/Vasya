<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

error_reporting(-1);

/* Коды для замены букв */
$code = array(
    'А' =>  '4',
    'Б' =>  '6',
    'В' =>  '8',
    'Г' =>  'r',
    'Е' =>  '€',
    'З' =>  '3',
    'Ж' =>  '>|<',
    'И' =>  'N',
    'К' =>  '|<',
    'Л' =>  '^',
    'О' =>  '0',
    'С' =>  ' ( ',
    'P' =>  '|o',
    'У' =>  'Y',
    'X' =>  '}{',
    'Э' =>  '-)',

);

$text = 'ОЛОЛОЖКА';
$l33t = strtr($text, $code);

echo "Ты говоришь: {$text} <br> А хакеры говорят: {$l33t}\n";

?>
</body>
</html>