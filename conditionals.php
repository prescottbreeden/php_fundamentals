<?php

function lieDetector($var) {
	if($var) {
		echo "tis truthy <br>";
	}
	else {
		echo "tis falsey <br>";
	}

}

lieDetector(true);
lieDetector(false);
lieDetector(null);
lieDetector(0);
lieDetector('');
lieDetector([]);


// switch case

$first_name = 'Oliver';
$roles = array('guest', 'member', 'admin');
$role = 0;

switch($first_name)
{
	case 'Tom':
		$role = 1;
	break;

	case 'Severus':
		$role = 1;
	break;

	case 'Oliver':
		$role = 2;
	break;
}

echo "Hello $first_name ! Your role is $roles[$role]";
?>
