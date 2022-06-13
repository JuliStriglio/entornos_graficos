<?php

if (isset($_POST["titular"])){
    setcookie("titular", $titular, time()-100); 
}

header("Location: periodico.html");
 ?>