<?php
	session_start();

	if(!isset($_SESSION['empleados'])){
		echo'
			<script>
				alert("Error");
				window.location="../identificate.php"
			</script>
		';
		session_destroy();
		die();
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Empleados</title>
</head>
<body>
<h1>HOla empleado</h1>
</body>
</html>