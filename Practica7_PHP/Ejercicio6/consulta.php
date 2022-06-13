<html>
    <head>
        <title>Consulta mail</title>
    </head>
    <body>
        
    
<?php
include('conexion.php');

$mail = $_POST['mail'];

$sql = ("SELECT * FROM alumnos WHERE mail = '$mail'");
$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));

$fila= mysqli_fetch_array($resultado);

if (mysqli_num_rows ($resultado) == 0){
    echo ("Ese mail no existe") ; 
    echo ("<a href='formulario.html'> Volver al login </a>");

}
else {
    session_start();
    $nombre = $fila[1];
    $_SESSION['nombre']= $nombre;
header('Location:panel.php');
}

mysqli_close($link);



?>
</body>
</html>