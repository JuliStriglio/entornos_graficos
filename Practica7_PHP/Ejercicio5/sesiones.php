<?php
if ($_SERVER ['REQUEST_METHOD']=='POST') {
    if (!isset ($_SESSION)) {
        session_start();
    }

$_SESSION['usuario']= $_REQUEST['usuario'];
$_SESSION['contrasena']= $_REQUEST['contrasena'];

} header('Location: panel.php');

?>