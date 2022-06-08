<html> 
<head>
<title>Modificacion</title>
</head>
<body>
<?php
include ("conexion.php");

$id = $_POST['id'];

$Ciudad = $_POST['ciudad'];
$Pais = $_POST['pais'];
$Habitantes = $_POST['habitantes'];
$Superficie = $_POST['superficie'];
$TieneMetros= $_POST['tieneMetro'];

$Sql = " UPDATE ciudades  SET ciudad = '$Ciudad', pais = '$Pais', habitantes = '$Habitantes',
superficie = '$Superficie' ,tieneMetro = '$TieneMetros' where id = '$id'; ";

mysqli_query($link, $Sql) or die(mysqli_error($link));
mysqli_close($link);

echo("Se modifico de manera exitosa");

?>
</body>
</html>