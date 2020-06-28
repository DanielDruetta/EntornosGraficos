<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 6</title>        	    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    
 	<body>

<?php
session_start();

$email = $_POST['email'];

$conn = include("conexion.inc");

$sentencia = "SELECT codigo,nombre,codigocurso,mail FROM alumnos WHERE mail='$email'";
$resultado = mysqli_query($link, $sentencia) or die (mysqli_error($link));
$existe = mysqli_fetch_assoc($resultado);

if ($existe) {
    $_SESSION['nombre']=$existe['nombre'];
    $_SESSION['codigo']=$existe['codigo'];
    $_SESSION['mail']=$existe['mail'];
    $_SESSION['codigocurso']=$existe['codigocurso'];
?>

    <div class="container">
        <div class="form-group col-md-12">
            <br/>
            <h3>Datos:</h3>
            <p>El codigo es: <?php echo $existe['codigo']; ?></p>
            <p>El nombre es: <?php echo $existe['nombre']; ?></p>
            <p>El email es: <?php echo $existe['mail']; ?></p>
            <p>El codigo curso es: <?php echo $existe['codigocurso']; ?></p>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <a href="pagina1.php" class="btn btn-primary">Pagina siguiente</a>
                <a href="cerrarsesion.php" class="btn btn-primary">Menu principal</a>           
            </div>
        </div>
    </div>

<?php
} else {
?>

<div class="container">
        <div class="form-group col-md-12">
            <br/>
            <h3>Error:</h3>
            <p>El email ingresado no existe</p>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <a href="principal.html" class="btn btn-primary">Menu principal</a>           
            </div>
        </div>
    </div>


<?php
}
mysqli_free_result($resultado);
mysqli_close($link);
?>
</body>

</html>