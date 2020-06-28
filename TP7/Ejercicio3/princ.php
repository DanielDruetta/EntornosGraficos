<?php


//Controlo si el usuario ya está logueado en el sistema.
if(!isset($_COOKIE['usuario'])){
	//Si no está logueado.
	//Traigo usuario y contrasena del form en html
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	//Guardo usuario y contrasena en la cookie
	setcookie('usuario',$usuario);
	setcookie('password',$password);
	
}

header("Location: principal.php");


?>