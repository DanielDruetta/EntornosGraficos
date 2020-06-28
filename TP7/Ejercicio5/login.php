<?php
session_start();

if(!isset($_SESSION['usuario'])){
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$_SESSION['usuario'] = $usuario;
	$_SESSION['password'] = $password;
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 5</title>        	    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    
 	<body>
        <div class="container">
			<form action="login.php" method="post">
				<div class="form-group">
					<br/>
					<h3>Bienvenido!</h3>
                </div>
                
                <div class="form-group">
                    <p>Usuario ingresado: <?php echo $_SESSION['usuario']; ?></p>
                    <p>Contrasena ingresada: <?php echo $_SESSION['password']; ?></p>
				</div>

				<div class="form-group">
					<a href="pagina1.php" class="btn btn-primary">Ir a pagina 1</a>
					<a href="cerrarsesion.php" class="btn btn-primary">Cerrar sesion</a>
				</div>
			
			</form>
		</div>
	</body>
</html>