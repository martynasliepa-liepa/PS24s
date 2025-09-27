<?php
    $ats=0;
	$y=1;
	$x = 5;
	print ("pirminis skaicius: $x <br>");
    for (; $x > 1;) {
		if($x %2 ==0){
			$x=$x/2;
		}
		else {
			$x=$x*3+1;
		}
		$y++;
		print ("atsakymas: $x  ir iteracijų skaicius $y<br>");

    }

?>