<?php

	session_start();


	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	include("conexion3.php");

	$proceso = $conexion->query("SELECT * FROM registro WHERE usuario='$usuario' AND password='$password'");
	
	if ($resultado = mysqli_fetch_array($proceso)) {
	$_SESSION['u_usuario'] = $usuario;
	header("location: bienvenido.php");
	echo '<script>alert("Sesion Exitosa, Bienvenido")</script> ';
	}
	else{
	
	echo '<script>alert("Clave o Usuario Incorrecto")</script> ';
	echo "<script>location.href='ingreso.php'</script>";
	}

?>