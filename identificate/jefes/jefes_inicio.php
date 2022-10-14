<?php
	session_start();

	if(!isset($_SESSION['jefes'])){
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
	<title>Jefes</title>
</head>
<body>
	<input type="button" name="" value="Carpeta Personal">
	<a href="../../carpetas/jefes/"><input type="button" name="" value="Carpeta Jefe"></a>
	<input type="button" name="" value="Carpeta Empleados">
</body>
</html>