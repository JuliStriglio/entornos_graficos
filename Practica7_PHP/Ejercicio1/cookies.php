<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="cookies_ej1.php" method="post">
        <select name="estilo">
            <option value="Verde">Verde
            <option value="Rosa">Rosa 
            <option value="Azul">Azul
        </select>
        <input type="submit" value="Actualizar estilo">
    </form>
   <?php

   if (isset($_POST ["estilo"])) {
       $estilo = $_POST ["estilo"];
       setcookie ("estilo", $estilo, time()+ (60 * 60 * 24 * 90) ); 
   } 
      else { 
          if (isset ($_COOKIE["estilo"])) {
              $estilo = $_COOKIE["estilo"];
          }
      }
    if (isset ($estilo)) {
        echo '<link rel="stylesheet" type="text/css" href="'. $estilo. '.css">';
    }

    echo("El color elegido es :". $estilo);
    ?>
    </body>
</hmtl>
