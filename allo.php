<?php
	$initial = array("1"=>"I", "4"=>"IV", "5"=>"V", "9"=>"IX", "10"=>"X", "40"=>"XL", "50"=>"L", "90"=>"XC", "100"=>"C","400"=>"CD", "500"=>"D", "900"=>"CM", "1000"=>"M", "2000"=>"MM", "3000"=>"MMM");
    $input = 2482;
	$x=((int)($input/1000)); 
	$y=((int)(($input%1000)/100)); 
	$z=((int)((($input%1000)%100)/10));
	$a=$input%10;


	function inBetween($THplace,$base,$type1,$type2){ 
		global $answer;
		global $initial;
	if($THplace >=(1*$base) && $THplace<(4*$base) && $THplace!=1*$base){
		//	run loop upto $THplace;
		// $roman.=$type1; 
		for($i=0;$i<$THplace;$i++){
			$answer.=$type1;
		}
}
	elseif ($THplace>(5*$base) && $THplace<(10*$base) && $THplace!=9*$base) {
		// run loop upto $THplace - 5*$base;
		// $roman.=$type2 . $type1;
			$answer.=$type2;
			for($i=0;$i<($THplace-5*$base);$i++){
				$answer.=$type1;
			}
	}
}

	function exact($THplace){
		global $initial;
		global $answer;
	foreach ($initial as $key => $value) {
		if ($key == $THplace){
			$answer.=$value;
		}
	}
	
}
exact($x*1000);
exact($y*100);
inBetween($y,100,"C","D");
exact($z*10);
inBetween($z,10,"X","L");
exact($a);
inBetween($a,1,"I","V");
echo $answer;
?>