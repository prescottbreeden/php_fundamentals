<?php
$balls = array();

$balls[] = "Randy";
$balls[] = "Marsh";
$balls[] = "Bob";
$balls[] = "Dillan";

echo $balls[0];
echo $balls[1];
echo $balls[2];
echo $balls[3];

echo "This is Randy: $balls[0] <br>";
echo "This is Marsh: $balls[1] <br>";
echo "This is Bob: $balls[2] <br>";
echo "This is Dillan: $balls[3] <br>";

$stooges = array("larry", "curly", "mo");
echo $stooges[2] . "<br>";


$students = array(
				array("Randy", "Marsh", 27),
				array("Stan", "Marsh", 8)
);

echo $students[0][1] . "<br>";

$student = array("first_name" => "Randall","last_name" => "Frisk", 27);

echo $student["first_name"] . "<br>";
echo $student[0] . "<br>";

$balls = array(
	"balls" => array("first_name" => "balls", "last_name" => "mcGee"),
	array("first_name" => "bugs", "last_name" => "bunny"),
	array("first_name" => "chuck", "last_name" => "norris"),
	array("first_name" => "donald", "last_name" => "duck")
);

echo $balls["balls"]['first_name'] . "<br>";
echo $balls[0]['first_name'] . "<br>";
echo $balls[1]['first_name'] . "<br>";

$balls["dingle"] = array("first_name" => "john", "last_name" => "dingle");

echo $balls["dingle"]["first_name"];

var_dump($balls);

$test = "hey". 123 ."ho";
echo $test;

?>
