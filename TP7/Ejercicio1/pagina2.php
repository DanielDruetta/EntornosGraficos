<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 1</title>  
        <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/1/1a/Flag_of_Argentina.svg">       	    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

<body>
<?php
session_start();

$estilo = $_SESSION['estilo'];

echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo . '.css">';


?>
<div class="container">
    <div class="form-group">
        <br/>
        <p>Este es el estilo: <?php echo $estilo; ?></p>
        <div class="col-md-12">
            <a href="principal.html" class="btn btn-primary">Menu principal</a> 
			<a href="pagina1.php" class="btn btn-primary">Ir a pagina 1</a>            
        </div>
    </div>
</div>
</body>