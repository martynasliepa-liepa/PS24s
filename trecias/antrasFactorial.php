<?php
	require_once 'antras.php';
	
    class antrasFactorial extends antras{
		
		function getConstB(){
		return self::B;
      }
	
	    function factorial(){
            $factorialskaic = $this->getConstB();
            $resultatas = 1;
            for ($x = 1; $x <= $factorialskaic; $x++) {
                $resultatas *= $x;
            } 
			print ("<br> Faktorialo atsakymas : $resultatas ");
        }
	}
    $test = new antrasFactorial();
    $test->factorial();
	
?>