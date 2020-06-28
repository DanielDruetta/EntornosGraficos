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

$id = $_SESSION['id'];
$nombre = $_POST['nombre'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
if (isset($_POST['metro'])){
    $metro = '1';}
    else{
        $metro = '0';  
    }

$conn = include("conexion.inc");

$sentencia = 
            "UPDATE ciudades
            SET nombre='$nombre', pais='$pais', habitantes='$habitantes', superficie='$superficie', tiene_metro='$metro'
            WHERE id='$id'";

mysqli_query($link, $sentencia) or die (mysqli_error($link));

?>
    <div class="container">
            <div class="form-group col-md-12">
                <br/>
                <h5>La ciudad fue modificada</h5>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <a href="principal.html" class="btn btn-primary">Menu principal</a>           
                </div>
            </div>
    </div>
<?php

mysqli_close($link);
?>
</body>