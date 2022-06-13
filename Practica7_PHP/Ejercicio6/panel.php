<?php
session_start();
$varsession= $_SESSION ['nombre'];

if (isset ($_SESSION['nombre'])) {
    echo ("BIENVENIDO : ". $_SESSION['nombre']);
}

else {
    echo ("Usted no puede visitar esta pagina ");
}

?>