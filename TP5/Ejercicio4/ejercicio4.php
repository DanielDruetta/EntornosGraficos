<?php
session_start();


//Controlo si el usuario ya está logueado en el sistema.
if(!isset($_SESSION['usuario'])){
	//Si no está logueado.
	//Traigo usuario y contrasena del form en html
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	//Guardo usuario y contrasena en la sesion
	$_SESSION['usuario'] = $usuario;
	$_SESSION['password'] = $password;
	//header("Location: index.html");
}

//print_r($usuario." - ".$password);
//print_r($_SESSION['usuario']." - ".$_SESSION['password']);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 4</title>        	    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    
 	<body>
        <div class="container">
			<form action="" method="post">
				<div class="form-group col-md-12">
					<br/>
					<h3>Cantidad de visitas de <?php echo $_SESSION['usuario'] ?> </h3>
				</div>
				
				<div class="form-group">
					<?php include("contador.php");?>
				</div>
				
				<div class="form-group">
					<a href="pagina1.php" class="btn btn-primary">Ir a pagina 1</a>
					<a href="pagina2.php" class="btn btn-primary">Ir a pagina 2</a>
					<a href="cerrarsesion.php" class="btn btn-primary">Cerrar sesion</a>
				</div>




			
			</form>
		</div>
	</body>
</html>