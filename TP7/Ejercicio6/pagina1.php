<?php
session_start();

if(isset($_SESSION['nombre'])){
    $nombre = $_SESSION['nombre'];
    $codigo=$_SESSION['codigo'];
    $email=$_SESSION['mail'];
    $codigocurso=$_SESSION['codigocurso'];

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 6</title>        	    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    
 	<body>
        <div class="container">
            <div class="form-group col-md-12">
                <br/>
                <h3>Bienvenido a nuestra pagina:</h3>
                <p>Verifique los datos ingresados</p>
                <p>Codigo: <?php echo $codigo; ?></p>
                <p>Nombre: <?php echo $nombre; ?></p>
                <p>Email: <?php echo $email; ?></p>
                <p>Codigo de curso: <?php echo $codigocurso; ?></p>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <a href="cerrarsesion.php" class="btn btn-primary">Menu principal</a>           
                </div>
            </div>
        </div>
	</body>
</html>