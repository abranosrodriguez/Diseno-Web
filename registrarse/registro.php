<?php
	
	include("conexion.php");

	if(isset($_POST['registrarse'])){
		$nombre=$_POST['nombre'];
		$apellidos=$_POST['apellidos'];
		$correo=$_POST['correo'];
		$contrasena=$_POST['contrasena'];
		$recontrasena=$_POST['recontrasena'];
		$telefono=$_POST['telefono'];


		$verificar_usuario=mysqli_query($conex,"SELECT * FROM Usuarios WHERE Correo='$correo'");

		if(mysqli_num_rows($verificar_usuario) > 0){
			echo'
			<script>
				alert("Este correo ya está en uso");
				window.location="registrarse.php";
			</script>
			';
			exit();
		}

		if(isset($_POST['registrarse'])){
			echo'
			<script>
				alert("Registro Completado");
				window.location="../identificate/identificate.php";
			</script>
			';
		}

		$consulta="INSERT INTO Usuarios(Nombre,Apellidos,Correo,Contrasena,Recontrasena,Telefono) VALUES('$nombre','$apellidos','$correo','$contrasena','$recontrasena','$telefono')";
		$insertar_datos=mysqli_query($conex,$consulta);
	}
?>