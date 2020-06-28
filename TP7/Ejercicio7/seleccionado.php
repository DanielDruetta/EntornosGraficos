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

$id = $_POST['seleccion'];


$conn = include("conexion.inc");

$sentencia = "SELECT * FROM catalogo WHERE id='$id'";
$resultado = mysqli_query($link, $sentencia) or die (mysqli_error($link));
$fila = mysqli_fetch_array($resultado)

?>

<div class="container">
	<form action="confirmacion.php" method="post">
				<div class="form-group col-md-12">
					<br/>
					<h3>Desea agregar el producto?</h3>
				</div>
				<div class="form-group">
                    <div>
                        <label class="control-label col-md-10">ID: <?php echo ($fila['id']); ?></label>
					    <input name="id" type="hidden" value="<?php echo ($fila['id']); ?>" >
                    </div>
                    <div>
                        <label class="control-label col-md-10">Producto: <?php echo ($fila['producto']); ?></label>
					    <input name="producto" type="hidden" value="<?php echo ($fila['producto']); ?>">
                    </div>
                    <div>
                        <label class="control-label col-md-10">Precio: <?php echo ('$'.$fila['precio']); ?></label>
					    <input name="precio" type="hidden" value="<?php echo ($fila['precio']); ?>" >
					</div>
					<div class="form-group">
						<label for="inputCantidad" class="control-label col-md-2">Cantidad:</label>
					<div class="col-md-2">
						<input id="inputCantidad" name="cantidad" class="form-control" type="number" required>
					</div>
				</div>
				</div>

				<div class="form-group">
					<div class="col-md-10">
						<button type="submit" class="btn btn-primary">Confirmar</button> 
						<a href="principal.php" class="btn btn-primary">Cancelar</a>           
					</div>
				</div>
			
			</form>
        </div>
        
<?php


// Liberar conjunto de resultados
mysqli_free_result($resultado);
// Cerrar la conexion
mysqli_close($link);
?>