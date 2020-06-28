<?php
session_start();

$id = $_POST['id'];
$producto = $_POST['producto'];
$precio= $_POST['precio'];
$cantidad=$_POST['cantidad'];

/*
echo $id;
echo $producto;
echo $precio;
echo $cantidad;
*/ 

$lista=array();
$lista[0]=$id;
$lista[1]=$producto;
$lista[2]=$precio;
$lista[3]=$cantidad;

$_SESSION[$producto] = $lista;

/*    
print_r($_SESSION[$producto]);
print_r($_SESSION[$producto][0]);
print_r($_SESSION[$producto][1]);
print_r($_SESSION[$producto][2]);
print_r($_SESSION[$producto][3]);
*/


header("Location: principal.php");


