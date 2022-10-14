<?php
	session_start();

	if(!isset($_SESSION['usuarionormal'])){
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
	<title>User</title>
</head>
<body>
<h1>HOla User</h1>
</body>
</html>