<!DOCTYPE html>
<html>
    <head>
        <title>Carrito</title>         	    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

<body>
<div class="container">
<?php
session_start();
$conn = include("conexion.inc");

$sentencia = "SELECT * FROM catalogo";
$resultado = mysqli_query($link, $sentencia) or die (mysqli_error($link));
//$total_registros = mysqli_num_rows($resultado);


?>
    <div class="container">
        <form action="seleccionado.php" method="post">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>

<?php
while ($fila = mysqli_fetch_array($resultado))
{
?>
                    <tr>
                    <td><?php echo ($fila['id']); ?></td>
                    <td><?php echo ($fila['producto']); ?></td>
                    <td><?php echo ('$'.$fila['precio']); ?></td>  

                    <td><button type="submit" class="btn btn-primary" name="seleccion" value="<?php echo $fila['id']; ?>">Seleccionar</button></td>

                    </tr>

<?php
}

// Liberar conjunto de resultados
mysqli_free_result($resultado);
// Cerrar la conexion
mysqli_close($link);
?>


                </tbody>
            </table>
        </form>


        <div class="form-group">
            <a href="principal.php" class="btn btn-primary">Menu principal</a>
            <a href="mostrar_carrito.php" class="btn btn-primary">Mostrar Carrito</a>
            <a href="cerrarsesion.php" class="btn btn-primary">Borrar Carrito</a>
        </div>
    </div>

</body>