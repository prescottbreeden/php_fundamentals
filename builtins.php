<?php

$x = 'Howdie Doodie';
echo $x . "<br>";
echo strtolower($x) . "<br>";
echo strtoupper($x) . "<br>";
echo strlen($x) . "<br>";

echo str_replace($x, "good bye", $x) . "<br>";
$vowels = array("a", "e", "i", "o", "u");
$onlyconsonants = str_replace($vowels, "", $x);
echo $onlyconsonants . "<br>";


$split = explode(' ', $x);
foreach($split as $word) {
	echo $word . "<br>";
}

$glue = implode('<->', $split);
echo $glue . "<br>";

//function for numbers:

echo is_numeric(8) . "<br>";
echo rand(0,100) . "<br>";

// other usefuls
echo isset($x) . "<br>"; // returns true/false depending on wheterh or not the value is a number

echo empty('') . "<br>"; // returns false if var exists and has a non-empty, non-zero value

$sample = array(10, 4, 3, 6, 4, 7, 12, 23, 5, 3, 23, 667);
$output = print_average($sample);
echo $output . "<br>";


function print_average($arr) {
	$sum = 0;
	foreach($arr as $num) {
		$sum = $sum + $num;
	}
	$sum = $sum/count($arr);

	return $sum;
}

$posts = array();
var_dump($posts);

echo "<br>";

define('A_WEEK', 7);
$two_weeks = A_WEEK + A_WEEK;
echo $two_weeks;

echo "<br>";

$screech = "iiiikkkkk";
echo intval($screech);


?>
