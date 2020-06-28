<?php

$destinatario = $_POST['email'];

$asunto = "Recomendación página web";
$consulta = "Mira esta página web";

$headers = "From: Daniel Druetta <danidruetta97@gmail.com>\r\n";


mail($destinatario,$asunto,$consulta,$headers);
printf("Enviado");
?>