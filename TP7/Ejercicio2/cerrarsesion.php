<?php
    // Archivo para acumular el numero de visitas
    $archivo = "contador.dat";
    // Abrir el archivo para lectura
    $abrir = fopen($archivo, "r");
    // Leer el contenido del archivo
    $cont = fread($abrir, filesize($archivo));
    // Cerrar el archivo
    fclose($abrir);
    // Abrir nuevamente el archivo para escritura
    $abrir = fopen($archivo, "w");
    // Poner contador en 0
    $cont = 0;
    // Guardar la modificación
    $guardar = fwrite($abrir, $cont);
    // Cerrar el archivo
    fclose($abrir);
    setcookie('usuario',false);
	setcookie('password',false);
    header("Location: principal.html");
?>

