<?php
    include ("conexion.php");
    $can = $_POST['cancion'];
    $vSql= "Select * from buscador where canciones LIKE '%".$can."%'";
    $vResultado= mysqli_query($link,$vSql);
    $fila = mysqli_fetch_array($vResultado);
    $nombre = $fila['canciones'];
    setcookie("canciones", $nombre, time()+ 3600*24*365);
    header("Location: index.php");

?>