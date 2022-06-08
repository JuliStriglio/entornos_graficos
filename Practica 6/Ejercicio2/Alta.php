<!DOCTYPE html>
<html >
<head>
    <title>Alta usuario</title>
</head>
<body>

<?php
include("conexion.php");


$Ciudad = $_POST['ciudad'];
$Pais = $_POST['pais'];
$Habitantes = $_POST['habitantes'];
$Superficie = $_POST['superficie'];
$TieneMetros= $_POST['tieneMetro'];

$Sql= ("INSERT into ciudades (ciudad, pais, habitantes, superficie, tieneMetro) 
values ('$Ciudad', '$Pais', '$Habitantes',' $Superficie', '$TieneMetros')"); 

mysqli_query($link, $Sql) or die(mysqli_error($link));
mysqli_close($link);


echo ("La ciudad fue registrada con exito");
?>


