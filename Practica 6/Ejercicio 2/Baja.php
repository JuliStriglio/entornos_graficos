<html>
<head>
<title>Baja</title>
</head>
<body>
<?php
include ("conexion.php");
$ID = $_POST ['id'];
$Sql = "SELECT * FROM ciudades WHERE id='$ID' ";
$Resultado = mysqli_query($link, $Sql);
if(mysqli_num_rows($Resultado) == 0)
 {
 echo ("Ciudad inexistente..! <br>");
 echo ("<A href='FormBajaIni.html'>Continuar</A>");
}
else{

$Sql= "DELETE FROM ciudades WHERE id = '$ID' ";
mysqli_query($link, $Sql);
 echo("La ciudad fue borrada con exito <br>");
 echo("<A href='Menu.html'>Volver al Menu del ABM</A>");
}

mysqli_free_result($Resultado);

mysqli_close($link);
?>
</body>
</html>