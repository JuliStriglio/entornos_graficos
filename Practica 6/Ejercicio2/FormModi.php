<html>
    <title>Modificacion</title>
</head>
<body>
<?php
include ("conexion.php");


$ID = $_POST["id"];


$Sql = "SELECT * FROM ciudades WHERE id ='$ID' ";
$Resultado = mysqli_query($link, $Sql) or die (mysqli_error($link));

$fila = mysqli_fetch_array($Resultado);
if(mysqli_num_rows($Resultado) == 0) {
 echo ("Esa ciudad no existe..! <br>");
 echo ("<A href='FormModiIni.html'>Continuar</A>");
}
else{
?>
<FORM action="Modi.php" method="POST" name="FormModi">
<table width="356">
<tr>
 <td width="103"> ID:  </td>
 <td width="243"> <input type="text" name="id" value="<?php
echo($fila['id']); ?>">
 </td>
</tr>
<tr>
 <td width="103"> Ciudad:  </td>
 <td width="243"> <input type="text" name="ciudad" size="20" maxlength="20"
 value="<?php echo($fila['ciudad']); ?>">
 </td>
 </tr>
 <tr>
 <td width="103"> Pais : </td>
 <td width="243"> <input type="text" name="pais" size="20" maxlength="20"
 value="<?php echo($fila['pais']); ?>">
 </td>
</tr>
<tr>
 <td width="103"> Habitantes : </td>
 <td width="243"> <input type="text" name="habitantes" size="20" maxlength="40"
 value="<?php echo($fila['habitantes']); ?>">
 </td>
 </tr>
 <tr>
 <td width="103"> Superficie : </td>
 <td width="243"> <input type="text" name="superficie" size="20" maxlength="40"
 value="<?php echo($fila['superficie']); ?>">
 </td>
 </tr>
 <tr>
 <td width="103"> Tiene metros : </td>
 <td width="243"> <input type="boolean" name="tieneMetro" size="20" maxlength="40"
 value="<?php echo($fila['tieneMetro']); ?>">
 </td>
 </tr>
 <tr>
 <td colspan="2" align="center"> <input type="SUBMIT" name="Submit"
value="Modificar">
 </td>
 </tr>
</table>
</FORM>
<?php
}


mysqli_free_result($Resultado);


mysqli_close($link);
?> </html>