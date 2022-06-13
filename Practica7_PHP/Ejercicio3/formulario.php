<?php
 
if(isset($_COOKIE['usuario'])){
    $usuario = $_COOKIE['usuario'];
}else
{
    $usuario ="";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Ejercicio 3</title>
</head>
<body>
    
    
    <form action="usuario.php" method="post" name="formulario">
        <TABLE width="225">
            <TR>
                <TD> Usuario: </TD>
                <TD > <input type="text" name="usuario"> </TD>
            </TR>
           <TD> <input type="submit" name="submit" value="ACEPTAR"></TD>
        </TABLE>
        </form>

      <?php
      echo ('El nombre ingresado anteriormente es'. $usuario);
      ?>
        </body>
</html>