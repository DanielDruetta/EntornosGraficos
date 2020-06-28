<?php

$usuario = $_COOKIE['usuario'];
$password = $_COOKIE['password'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 2</title>        	    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    
 	<body>
        <div class="container">
			<form action="" method="">
				<div class="form-group col-md-12">
					<br/>
					<h3>Cantidad de visitas de <?php echo $_COOKIE['usuario'] ?> </h3>
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