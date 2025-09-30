<?php
    class antras {

      public $x;
	  public $y;
      protected const B = 5;
	  
	//  function getConstB(){
	//	return self::B;
     // }

      function set_x($x) {
        $this->x= $x;
      }

      function get_y() {
        return $this->y;
      }

      function skaicavimas() {
		$x=$this->x;
		$this->y=1;
		//$y=1;
		print ("prminis skaicius: $x <br>");
		while ($x!=1) {
		if($x %2 ==0){
			$x=$x/2;
		}
		else {
			$x=$x*3+1;
		}
		$this->y++;
		//$y++;
		print ("atsakymas: $x  ir iteracijų skaicius ".$this->y."<br>");

    }
		return 0;
      }
	  }
	$obj= new antras();
		$a=10;   
	$obj-> set_x($a);
	$obj-> skaicavimas();
	$atsakymas=$obj->get_y();
	print ("Viso ciklų ".$atsakymas);

?>