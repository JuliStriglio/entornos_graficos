<?php
if  (isset ($_COOKIE['contador'])) {
    setcookie('contador',  $_COOKIE['contador']+1 , time() + 365 * 24 * 60 * 60);
    echo ("Numero de visitas :". $_COOKIE['contador']) ;

} 
else {
    setcookie('contador', 1, time() + 365 * 24 * 60* 60);
    echo ('Bienvenidos por primera vez a la pagina web');
}

?>


<html>
    <head>
        <title> Ejercicio 2 </title>
    </head>
    <body>

