<?php

$handle = fopen ("myfile.txt","r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$max_count = fgets($handle);
$count = 1;
if (($fizz != 0) && ($buzz != 0)){
echo "Your Fizz-Buzz Code: ";
while ($count <= $max_count) {
	if (($count % (int)$fizz) && ($count % (int)$buzz)) {
		echo "$count ";
		$count++;
	}elseif ($count % (int)$fizz) {
		echo "B ";
		$count++;
	}elseif ($count % (int)$buzz) { 
		echo "F ";
		$count++;
	}else {echo "FB "; 
	$count++;
	}
}
echo "\n";}
else echo "Try again. Use numbers and don`t use zero\n";
?>