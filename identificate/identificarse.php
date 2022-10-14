<?php
	session_start();

	include 'conexion.php';

	$correo_usuario=$_POST['correo'];
	$correo_empleados=$_POST['correo'];
	$correo_jefes=$_POST['correo'];

	$contrasinal=$_POST['contrasena'];


	$validar_usuario=mysqli_query($conex,"SELECT * FROM Usuarios Where Correo='$correo_usuario' AND Contrasena='$contrasinal' ");
	$validar_contrasena_usuario=mysqli_query($conex,"SELECT * FROM Usuarios WHERE Correo='$correo_usuario' ");

	$validar_empleados=mysqli_query($conex,"SELECT * FROM Empleados Where Correo='$correo_empleados' and Contrasena='$contrasinal' ");
	$validar_contrasena_empleados=mysqli_query($conex,"SELECT * FROM Empleados WHERE Correo='$correo_empleados' ");

	$validar_jefes=mysqli_query($conex,"SELECT * FROM Jefes Where Correo='$correo_jefes' and Contrasena='$contrasinal' ");
	$validar_contrasena_jefes=mysqli_query($conex,"SELECT * FROM Jefes WHERE Correo='$correo_jefes' ");


	// ========== JEFES	==========

	if(mysqli_num_rows($validar_jefes) > 0){
		$_SESSION['jefes']=$correo_jefes;
		header("location: jefes/jefes_inicio.php");
		exit;
	}

	elseif(mysqli_num_rows($validar_contrasena_jefes)>0){
		echo'
			<script>
				alert("Error en alguno de los datos metidos");
				window.location="identificate.php";
			</script>
		';
	}


	// ========== EMPLEADOS	==========

	if(mysqli_num_rows($validar_empleados) > 0){
		$_SESSION['empleados']=$correo_empleados;
		header("location: empleados/empleados_inicio.php");
		exit;
	}

	elseif(mysqli_num_rows($validar_contrasena_usuario)>0){
		echo'
			<script>
				alert("Error en alguno de los datos metidos");
				window.location="identificate.php";
			</script>
		';
	}

	// ========== USUARIOS	==========
	if(mysqli_num_rows($validar_usuario) > 0){
		$_SESSION['usuarionormal']=$correo_usuario;
		header("location: usuarios/usuarios_inicio.php");
		exit;
	}

	elseif(mysqli_num_rows($validar_contrasena_empleados)>0){
		echo'
			<script>
				alert("Error en alguno de los datos metidos");
				window.location="identificate.php";
			</script>
		';
	}
	else{
		echo'
			<script>
				alert("Dese de alta");
				window.location="../registrarse/registrarse.php";
			</script>
		';
	}
?>
