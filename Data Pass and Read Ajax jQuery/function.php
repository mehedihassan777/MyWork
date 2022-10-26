<?php 

	$check = $_POST['check'];

	$check();

	function add(){
		$a = $_POST['val1'];
		$b = $_POST['val2'];
		$result = $a+$b;
		echo $result;		
	}
	function sub(){
		$a = $_POST['val1'];
		$b = $_POST['val2'];
		$result = $a-$b;
		echo $result;		
	}
	function mul(){
		$a = $_POST['val1'];
		$b = $_POST['val2'];
		$result = $a*$b;
		echo $result;		
	}
	function div(){
		$a = $_POST['val1'];
		$b = $_POST['val2'];
		$result = $a/$b;
		echo $result;		
	}

	