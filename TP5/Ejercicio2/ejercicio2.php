<?php

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$consulta = $_POST['consulta'];
$email = $_POST['email'];

//printf($nombre." - ". $asunto." - ".$consulta." - ".$email);

$destinatario = "danidruetta_97@hotmail.com";
//$headers = "From: Daniel Druetta <danidruetta97@gmail.com>\r\n";
$headers = "From: ". $nombre. " <".$email. ">\r\n";

mail($destinatario,$asunto,$consulta,$headers);
printf("Enviado");
?>