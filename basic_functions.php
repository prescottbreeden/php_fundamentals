<?php 
// variables
$balls = [1, 2, 5, 10, 255, 3];

function odd_even($val) {
	if($val % 2 == 0) {
		echo "<p>Number is $val. This is an <span class='color-green'>even</span> number.</p> ";
	}
	else {
		echo "<p>Number is $val. This is an <span class='color-red'>odd</span> number. </p>";
	}
}

function createArray() {
	$giant_balls = array();
	for($i=0;$i<=200;$i++) {
		if($i % 2 != 0) {
			$giant_balls[] = $i;
		}
	}
	var_dump($giant_balls);
}

function avg($arr) {
	$total = 0;
	foreach($arr as $num) {
		$total = $total + $num;
	}
	$result = $total/count($arr);
	echo "<br>";
	echo $result;
}

function sumAll($arr) {
	$total = 0;
	foreach($arr as $num) {
		$total = $total + $num;
	}
	echo "<br>";
	echo $total;
}

function multiples($num, $stop) {
	for($i=0;$i<=$stop;$i++) {
		if($i % $num == 0) {
			echo "<div class='num-block'>$i</div>";
		}
	}
}

function oddNums() {
	for($i=0;$i<=1000;$i++) {
		if($i % 2 != 0) {
			echo "<div class='num-block'>$i</div>";
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<style>
	* {
		margin: 0;
		padding: 0;
	}

	body {
		padding: 10px;
		background-color: #333;
		color: #eee;
	}

	h2 {
		margin-bottom: 10px;
	}

	.column {
		flex-direction: column !important;
	}
	.color-green {
		color: green;
}

	.color-red {
		color: red;
}

	.container {
		padding: 20px;
		margin: 50px 0;
		border-bottom: 1px solid #eee;
}
	.output {
		display: flex;
		flex-wrap: wrap;
}

	.num-block {
		min-width: 30px;
		padding: 4px;
}

</style>
<body>
	<div class="container">
		<h2>Odd Numbers 1-1000</h2>
		<div class="output">
			<?php oddNums(); ?>
		</div>
	</div>
	<div class="container">
		<h2>Multiples of 5</h2>
		<div class="output">
			<?php multiples(5, 1000); ?>
		</div>	
	</div>
	<div class="container">
		<h2>Sum array of values</h2>
		<div class="output">
			<?php sumAll($balls); ?>
		</div>	
	</div>
	<div class="container">
		<h2>Average</h2>
		<div class="output">
			<?php avg($balls); ?>
		</div>	
	</div>
	<div class="container">
		<h2>Odd Num Array</h2>
		<div class="output">
			<?php createArray(); ?>
		</div>	
	</div>
	<div class="container">
		<h2>Odd or Even?</h2>
		<div class="output column">
			<?php 
			for($i=0;$i<=20;$i++) {
				odd_even($i);
			}

			?>
		</div>	
	</div>
</body>
</html>
