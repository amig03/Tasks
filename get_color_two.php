<?php

$time = $_GET['time'] % 8;

if ($time < 3) {
	echo 'green';
} elseif ($time >=5 && $time < 8) {
	echo 'green'; 
} else {
	echo 'red';
}

?>