<?php
$file = fopen ('fb_write.txt','a');
$handle = fopen ('fb_read.txt',"r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$max_count = fgets($handle);
$count = 1;
if (($fizz != 0) && ($buzz != 0)){
fputs($file,"Your Fizz-Buzz Code: ");
while ($count <= $max_count) {
	if (($count % (int)$fizz) && ($count % (int)$buzz)) {
		fputs($file, $count);
		$count++;
	}elseif ($count % (int)$fizz) {
		fputs($file, "B");
		$count++;
	}elseif ($count % (int)$buzz) { 
		fputs($file, "F");
		$count++;
	}else {fputs($file, "FB"); 
	$count++;
	}
}
echo "\n";
} else echo "Try again. Use numbers and don`t use zero\n";
fclose($handle);
fclose($file);
?>