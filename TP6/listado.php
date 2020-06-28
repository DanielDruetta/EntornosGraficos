<!DOCTYPE html>
<html>
    <head>
        <title>Capitales</title>  
        <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/1/1a/Flag_of_Argentina.svg">       	    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

<body>
<div class="container">
<?php
$conn = include("conexion.inc");

$sentencia = "SELECT * FROM ciudades";
$resultado = mysqli_query($link, $sentencia) or die (mysqli_error($link));;
//$total_registros = mysqli_num_rows($resultado);


?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Pais</th>
      <th scope="col">Habitantes</th>
      <th scope="col">Superficie</th>
      <th scope="col">Tiene metro</th>
    </tr>
  </thead>

  <tbody>

<?php
while ($fila = mysqli_fetch_array($resultado))
{
?>
  <tr>
      <td><?php echo ($fila['id']); ?></td>
      <td><?php echo ($fila['nombre']); ?></td>
      <td><?php echo ($fila['pais']); ?></td>
      <td><?php echo ($fila['habitantes']); ?></td>
      <td><?php echo ($fila['superficie']); ?></td>
      <td><?php if ($fila['tiene_metro']==1){echo 'Si';} else { echo 'No';};?></td>
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

        <div class="form-group">
            <a href="principal.html" class="btn btn-primary">Menu principal</a>
        </div>
    </div>

</body>