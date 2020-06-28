<?php

if(!isset($_COOKIE['noticia'])){
    $noticia = $_POST['noticia'];
    echo $noticia;
    
    setcookie('noticia',$noticia);

}
header("Location: main.php");
?>