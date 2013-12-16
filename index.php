<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>php practice</title>
</head>
<body>
<?php

/*
$name = 'PHP';
$Name = 'CodeIgniter';
echo 'Bookname: 
'.$name.'<br>';
echo "Bookname: {$Name}<br>";
echo 'Bookname: {$Name}<br>';

$format = 'Bookname: %s, %s<br>';
echo sprintf($format, $name, $Name);
*/

/*
$book = 'PHP';
$test = <<< EOL
here doc<br>
book name: $book<br>
EOL;
*/

/*
echo $test;

echo <<< END
echo can
output <br><br>
END;
*/

/*
echo <<< 'END'
Nowdoc<br>
single quotation mark<br>
book name: $book<br>
END;
*/

/*
$a = 'ABC';
$b = null;
$c['a'] = 123;

if (isset($a)) {
	echo '$a is set';
} else{
	echo '$a isnt set';
}
*/

/*
$str = 'string';
var_dump($str[3]);
var_dump($str['a']);
var_dump(isset($str['a']));
*/

/*
$a = 123;
$b = '321';

echo '$a '. gettype($a). '<br>';
echo '$b '. gettype($b). '<br>';

if (is_int($a)) {
	echo '$a is integer<br>';
} else {
	echo '$a isnt integer<br>';
}

if (is_string($b)) {
	echo '$b is string<br>';
} else {
	echo '$a isnt string<br>';
}

echo '<pre>';
var_dump($a);
var_dump($b);
echo '</pre>';

$a = strval($a);
$b = intval($b);

echo '$a '. gettype($a). '<br>';
echo '$b '. gettype($b). '<br>';

$a = (int)$a;
$b = (string)$b;

echo '$a '. gettype($a). '<br>';
echo '$b '. gettype($b). '<br>';
*/

/*
$a = 1e1000;
$b = (string)$a;
echo $b.'<br>';

$a = array('a','b','c');
$b = (string)$a;
echo $b.'<br>';
*/

/*
$a = null;
$b = '';
echo '$a:'.$a.'<br>';
echo '$b:'.$b.'<br>';

if ($a == $b){
	echo 'equal ';
}else{
	echo 'not equal ';
}

if ($a === $b){
	echo 'equal ';
}else{
	echo 'not equal ';
}

if (is_null($a)){
	echo 'null ';
}else{
	echo 'not null ';
}

if (isset($a)){
	echo 'defined ';
}else{
	echo 'not defined ';
}
*/

/*
$a = 'change before ';
$b = $a;
$c = & $a;

echo $a.$b.$c.'<br>';
$a = 'change after ';
echo $a.$b.$c;
*/

/*
$agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] :'';
$ip = isset($_SERVER['REOMOTE_ADDR']) ? $_SERVER['REOMOTE_ADDR'] :'';
$ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] :'';
echo $agent.'<br>'.$ip.'<br>'.$ref.'<br>';
echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
*/

/*
define('HELLO', 'Hello world!');
echo HELLO;
echo Hello;

$result = define('GREETING', 'Good morning', true);
if($result) {
	echo GREETING;
	echo Greeting;
}

const WORLD = 'World';
echo WORLD;
*/

/*
echo '<pre>';
print_r(get_defined_vars(true));
echo '</pre>';
*/

/*
$result = true;
if ($result == 'error'){
	echo 'equal';
}
switch($result){
	case 'error':
	echo 'error';
	break;

	case 'OK':

	case true:
	echo 'true';
	break;

	default:
	echo 'default';
	break;
}
*/

/*
$language = 'JP';
$message = ($language == 'JP')? 'JP':'not JP';
echo $message.'<br>';

$message = $message?: 'null';
echo $message.'<br>';

$message = '';

$message = $message?: 'null';
echo $message.'<br>';
*/

/*
$value1 = 10;
$value2 = 20;
if ($value1 < $value2){
	echo 'value1 less value2';
}
*/

/*
$year = 2013;
if ($year ===2013)
{
	echo 'true';
}
*/

/*
if ('3abc' == 3){
	echo 'true';
} else{
	echo 'false';
}

if ('3abc' == '3'){
	echo 'true';
} else{
	echo 'false';
}
*/

$fruit = array('apple'=> 200, 'orange'=> 100, 'grape'=> 200);
foreach ($fruit as $key => $value) {
	echo $key.' is '.$value.'<br>';
}


?>
</body>
</html>