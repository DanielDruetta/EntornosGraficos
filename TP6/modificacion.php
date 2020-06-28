<!DOCTYPE html>
<html>
    <head>
        <title>Capitales</title>  
        <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/1/1a/Flag_of_Argentina.svg">       	    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

<body>
<?php
session_start();

$nombre = $_POST['nombre'];

$conn = include("conexion.inc");

$sentencia = "SELECT * FROM ciudades WHERE nombre='$nombre'";
$resultado = mysqli_query($link, $sentencia) or die (mysqli_error($link));;
$existe = mysqli_fetch_assoc($resultado);

if (! $existe) {
?>
    <div class="container">
            <div class="form-group col-md-12">
                <br/>
                <h5>La ciudad ingresada no existe</h5>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <a href="principal.html" class="btn btn-primary">Menu principal</a>           
                </div>
            </div>
    </div>
<?php

} else {

    $_SESSION['id']=$existe['id'];

?>

<div class="container">
    <br/>
    <h3 align="center">Modificar ciudad</h3>

    <form action="modificacionReal.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group col-md-12">
                    <br/>
                    <h5>Datos actuales</h5>
                </div>
                
                <div class="form-group">
                    <label for="inputId" class="control-label col-md-2">ID:</label>
                    <div class="col-md-12">
                    <input id="inputId" name="id" class="form-control" type="text" value=<?php echo $existe['id'] ?> disabled>
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="inputNombre" class="control-label col-md-2">Nombre:</label>
                    <div class="col-md-12">
                    <input id="inputNombre" name="nombre" class="form-control" type="text" value=<?php echo $existe['nombre'] ?> disabled>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputPais" class="control-label col-md-2">Pais:</label>
                    <div class="col-md-12">
                    <input id="inputPais" name="pais" class="form-control" type="text" value=<?php echo $existe['pais'] ?> disabled>
                    </div>
                </div>
                
                   <div class="form-group">
                    <label for="inputHabitantes" class="control-label col-md-2">Habitantes:</label>
                    <div class="col-md-12">
                    <input id="inputHabitantes" name="habitantes" class="form-control" type="number" value=<?php echo $existe['habitantes'] ?> disabled >
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputSuperficie" class="control-label col-md-2">Superficie:</label>
                    <div class="col-md-12">
                    <input id="inputSuperficie" name="superficie" class="form-control" type="number" step=0.1 value=<?php echo $existe['superficie'] ?> disabled>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputMetro" class="control-label col-md-4">Tiene metro:</label>
                    <div class="col-md-12">
                    <input id="inputMetro" name="metro" class="form-control" type="text" value=<?php if($existe['tiene_metro'] == 1){ echo "Si";} else{ echo "No";} ?> disabled >
                    </div>
                </div>
    
            </div>
            
            
            <div class="col-md-6">
                <div class="form-group col-md-12">
                    <br/>
                    <h5>Datos nuevos</h5>
                </div>

                <div class="form-group">
					<label for="inputId" class="control-label col-md-2">ID:</label>
					<div class="col-md-10">
					<input id="inputId" name="id" class="form-control" type="number" value=<?php echo $_SESSION['id'] ?> disabled>
					</div>
                </div>
                
                <div class="form-group">
					<label for="inputNombre" class="control-label col-md-2">Nombre:</label>
					<div class="col-md-10">
					<input id="inputNombre" name="nombre" class="form-control" type="text">
					</div>
                </div>
                
                <div class="form-group">
					<label for="inputPais" class="control-label col-md-2">Pais:</label>
					<div class="col-md-10">
					<input id="inputPais" name="pais" class="form-control" type="text">
					</div>
                </div>
                
                <div class="form-group">
					<label for="inputHabitantes" class="control-label col-md-2">Habitantes:</label>
					<div class="col-md-10">
					<input id="inputHabitantes" name="habitantes" class="form-control" type="number">
					</div>
                </div>
                
                <div class="form-group">
					<label for="inputSuperficie" class="control-label col-md-2">Superficie:</label>
					<div class="col-md-10">
					<input id="inputSuperficie" name="superficie" class="form-control" type="number" step=0.1>
					</div>
                </div>
                
				<div class="form-group">
					<label for="inputMetro" class="control-label col-md-4">Tiene metro:</label>
					<div class="col-md-1">
					<input id="inputMetro" name="metro" class="form-control" type="checkbox" value="on" placeholder="" >
					</div>
				</div>


				<div class="form-group">
					<div class="col-md-8">
                        <button type="submit" class="btn btn-primary">Ingresar</button> 
                        <a href="principal.html" class="btn btn-secondary">Menu principal</a>            
					</div>
				</div>
            </div>
            
        </div>
</form>
</div>


</body>

<?php
 
}
mysqli_free_result($resultado);
mysqli_close($link);
?>