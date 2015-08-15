<?php

function run_function($function){
	
	$params = func_get_args();
	unset( $params[0] );

	if(($count = count($params)) > 0){
		$args = '$a';
		$inc = 'b';

		
		for($x = 1; $x < $count; $x++){
			$args .= ', $' . $inc;
			$inc++;
		}

		$params = "'" . implode('\', \'', $params) . "'";

		
		$eval = '$return = $function(' . $params . ');';
		eval($eval);

		return $return;
	}else{
		return false;
	}
}

//send an anonymus function whith parameters
echo run_function(function($a,$b){return $a+$b;},5,7);

?>