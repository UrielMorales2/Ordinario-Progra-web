<?php
	session_start();// Esta funcion siempre tiene que ir al principio
	include_once('conexion.php');// invoca al archivo conexion.php

	$email = $_POST['email']; // son los valores que envio desde el teclado
	$con = $_POST['password'];

	$qry = "SELECT * FROM usuarios WHERE email = '".$email."' AND password ='".$con."'";

	$resultado = mysqli_query($conn,$qry);

	if ($reg=mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

		$_SESSION['NombreCompleto']=$reg["NombreCompleto"];// despues del =, es lo que esta en la BD
		$_SESSION['id_usuario']=$reg["id_usuario"];
		

		echo "<script>location.href='home.php';</script>";//es un redireccionamiento automatico a la pagina linkeado
	}
	else{
		echo "<script>alert('Contraseña o email Incorrecto');</script>";
		echo "<script>location.href='index.php';</script>";
	}

 ?>










