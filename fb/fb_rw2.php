<?php
$wfile = fopen ('fb_write.txt','a');
$rfile = fopen ('fb_read.txt',"r");
$fizz = rtrim(fgets($rfile));
$buzz = rtrim(fgets($rfile));
$max_count = rtrim(fgets($rfile));
$count = 1;

function action (&$c, $f, $b, $mc, $fi) {while ($c <= $mc) {
	if (($c % $f) && ($c % $b)) {
		fputs($fi, $c);
		$c++;
	}elseif ($c % (int)$f) {
		fputs($fi, "B");
		$c++;
	}elseif ($c % $b) { 
		fputs($fi, "F");
		$c++;
	}else {fputs($fi, "FB"); 
	$c++;
	}
}}

if (($fizz != 0) && ($buzz != 0)){

fputs($wfile,"Your Fizz-Buzz Code: ");
action($count,$fizz,$buzz,$max_count,$wfile);
fputs($wfile,"\n");

} else echo "Try again. Use numbers and don`t use zero\n";
fclose($rfile);
fclose($wfile);
?>