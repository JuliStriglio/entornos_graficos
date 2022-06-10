        
<?php

if(isset($_POST['submit'])) { 
    $usuario= $_POST['usuario'];
    setcookie('usuario', $usuario, time()+ 365 * 24 * 60 * 60);
}

header("Location: formulario.php");

?>
