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
        include("conexion.inc");
        $Cant_por_Pag = 3;
        $pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
        if (!$pagina) {
            $inicio = 0;
            $pagina=1;
        }
        else {
            $inicio = ($pagina - 1) * $Cant_por_Pag;
        }// total de páginas

        $vSql = "SELECT * FROM ciudades";
        $vResultado = mysqli_query($link, $vSql);

        $total_registros=mysqli_num_rows($vResultado);
        $total_paginas = ceil($total_registros/ $Cant_por_Pag);

        echo "Numero de registros encontrados: " . $total_registros . "<br>";
        echo "Se muestran paginas de " . $Cant_por_Pag . " registros cada una<br>";
        echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";

        $vSql = "SELECT * FROM ciudades"." limit " . $inicio . "," . $Cant_por_Pag;
        $vResultado = mysqli_query($link, $vSql);
        $total_registros=mysqli_num_rows($vResultado);

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
while ($fila = mysqli_fetch_array($vResultado))
{
?>
    <tr>
        <td><?php echo ($fila['id']); ?></td>
        <td><?php echo ($fila['nombre']); ?></td>
        <td><?php echo ($fila['pais']); ?></td>
        <td><?php echo ($fila['habitantes']); ?></td>
        <td><?php echo ($fila['superficie']); ?></td>
        <td><?php echo ($fila['tiene_metro']); ?></td>
    </tr>

<?php
}

// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>


    </tbody>
</table>
    
    <?php
    if ($total_paginas > 1){
    for ($i=1;$i<=$total_paginas;$i++){
    if ($pagina == $i)
    //si muestro el índice de la página actual, no coloco enlace
    echo $pagina . " ";
    else
    //si la página no es la actual, coloco el enlace para ir a esa página
    echo "<a href='listadoPag.php?pagina=" . $i ."'>" . $i . "</a> ";}}
    ?>


    <div class="form-group">
        <p>&nbsp;</p>
        <a href="principal.html" class="btn btn-primary">Menu principal</a>
    </div>
    </div>

    </body>

</html>