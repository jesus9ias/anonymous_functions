<?php

//run function
function run_function($function){
	
	//get argument from the current function and delte the first, because is the same function
	$params = func_get_args();
	unset($params[0]);

	//if there is more params then use it
	if((count($params)) > 0){

		//concatenate the varr to create new params
		$params = "'" . implode('\', \'', $params) . "'";

		//cerate a function to evaluate
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