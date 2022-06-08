
<html>
<head>
<title> Listados completo </title>
</head>
<body>
<?php

include("conexion.php");
$Sql = "SELECT * FROM ciudades";
$Resultado = mysqli_query($link, $Sql);
$total_registros=mysqli_num_rows($Resultado);
?>
<table border=1>
<tr>
<td><b>ID</b></td>
<td><b>Ciudad</b></td>
<td><b>Pais</b></td>
<td><b>Habitantes</b></td>
<td><b>Superficie</b></td>
<td><b>Tiene metros</b></td>
</tr>
<?php
while ($fila = mysqli_fetch_array($Resultado))
{
?>
<tr>
 <td><?php echo ($fila['id']); ?></td>
 <td><?php echo ($fila['ciudad']); ?></td>
 <td><?php echo ($fila['pais']); ?></td>
 <td><?php echo ($fila['habitantes']); ?></td>
 <td><?php echo ($fila['superficie']); ?></td>
 <td><?php echo ($fila['tieneMetro']); ?></td>
</tr>
<tr>
 <td colspan="5">
<?php
}

mysqli_free_result($Resultado);

mysqli_close($link);
?>
 </td>
</tr>
</table>
<p>&nbsp;</p>
<p align="center"><a href="Menu.html">Volver al menu; del ABM</a></p>
</body>
</html>