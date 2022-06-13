<?php
session_start();
$varsession = $_SESSION['usuario'];

if ($varsession == null || $varsession = ''){
    echo(" Usted no esta autorizado ");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Recupero datos</title>
</head>
<body>
    <h1> Panel de Administracion </h1>
    <h2> Bienvenido : <?php echo $_SESSION['usuario'] ?> </h2>
    <a href="">Cerrar sesion </a>
</body>
</html>