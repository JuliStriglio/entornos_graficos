
<?php
if (isset($_COOKIE['contador'])){
    setcookie('contador',  $_COOKIE['contador']+1 , time() + 365 * 24 * 60 * 60);
    if (isset ($_COOKIE["titular"])) {
        $titular = $_COOKIE["titular"];
        echo("El titular elejido es :". $titular);
    }
}

else {
    setcookie('contador', 1, time() + 365 * 24 * 60* 60);
    if (isset($_POST ["titular"])) {
        $titular = $_POST ["titular"];
        setcookie ("titular", $titular, time()+ (60 * 60 * 24 * 90) ); 
        echo("El titular elejido es :". $titular); }
}


 ?>
<br> <br>
<a href="borrarCookie.php"> Borrar cookie </a>


<html>
</head>
<title> Periodico </title>
</head>
<body>
</body>
</html>