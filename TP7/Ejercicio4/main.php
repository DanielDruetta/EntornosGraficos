<?php

$noticia = $_COOKIE['noticia'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 4</title>        	    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    
 	<body>
        <div class="container">
		    <form action="" method="post">
                <div class="form-group col-md-12">
                    <br/>
                    <h3>Seccion de noticias de <?php echo $_COOKIE['noticia'];?></h3>
                </div>
                
                <div class="form-group">
                    <a href="principal.html" class="btn btn-primary">Pagina principal</a>
                    <a href="borrar_cookie.php" class="btn btn-primary">Borrar cookie</a>
                </div>
            </form>
        </div>
    </body>
</html>