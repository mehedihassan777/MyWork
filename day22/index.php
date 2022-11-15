<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Php</title>
</head>
<body>
	<?php 
		include 'functions.php';
		if(isset($_POST["submit"])){
			$cls = new Makeresult;
			$grade = $cls->result($_POST);
		}
	?>
	<form method="POST">
		<input type="text" name="n1"value="<?php if(isset($_POST["submit"])){echo $grade['mark1'];} ?>">
		<input type="text" name="n2"value="<?php if(isset($_POST["submit"])){echo $grade['mark2'];} ?>">
		<input type="text" value="<?php if(isset($_POST["submit"])){echo $grade['total'];} ?>">
		<input type="text" value="<?php if(isset($_POST["submit"])){echo $grade['grade'];} ?>">
		<button name="submit">Get Result</button>
	</form>
</body>
</html>