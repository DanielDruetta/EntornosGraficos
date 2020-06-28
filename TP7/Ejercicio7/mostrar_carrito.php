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


?>
    <div class="container">
        <form action="" method="post">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Subtotal</th>
                    </tr>
                </thead>

                <tbody>

<?php
$total=0;
foreach ($_SESSION as $fila) 
{

?>
                    <tr>
                    <td><?php echo ($fila[0]); ?></td>
                    <td><?php echo ($fila[1]); ?></td>
                    <td><?php echo ('$'.$fila[2]); ?></td> 
                    <td><?php echo ($fila[3]); ?></td>  
                    <td><?php echo '$'.($fila[2]*$fila[3]); ?></td> 
                    </tr>

<?php
$total=$total+$fila[2]*$fila[3];
}

?>


                </tbody>
            </table>
            <p>El total es: <?php echo '$'.$total ;?> </p>
        </form>


        <div class="form-group">
            <a href="principal.php" class="btn btn-primary">Menu principal</a>
            <a href="cerrarsesion.php" class="btn btn-primary">Borrar Carrito</a>
        </div>
    </div>

</body>