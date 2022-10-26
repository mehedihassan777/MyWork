<?php


	$check = $_POST['check'];

	if($check=="add")
		cal("+");
	elseif($check=="sub")
		cal("-");
	elseif($check=="mul")
		cal("*");
	elseif($check=="div")
		cal("/");
	else
		echo "Error";

	function cal($op){
		$a = $_POST['val1'];
		$b = $_POST['val2'];
		eval("\$result = \"$a\"$op\"$b\";");
		echo $result;		
	}