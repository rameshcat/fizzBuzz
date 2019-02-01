<?php
$wfile = fopen ('fb_write.txt','a');
$rfile = fopen ('fb_read.txt',"r");
$fizz = rtrim(fgets($rfile));
$buzz = rtrim(fgets($rfile));
$max_count = rtrim(fgets($rfile));
$arr=range(1, $max_count);
fputs ($wfile, "Your Fizz-Buzz Code: ");
array_map(function ($ae) use ($wfile) {
	fputs ($wfile, $ae.' ');}, array_map(function ($ae) use ($fizz, $buzz) {
	if (($ae % $fizz) && ($ae % $buzz)) {
		return ($ae);
	}elseif ($ae % $fizz) {
		return "B";
	}elseif ($ae % $buzz) { 
		return "F";
	}else return "FB"; 
	}, $arr));
fputs ($wfile, "\n");
?>