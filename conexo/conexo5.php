<?php
include '../models/log.php';
//LOG INFO
date_default_timezone_set("America/Santiago");
$log = new Log ('../log/loginfo.log');
$log -> writeline ('info', "[grafo5.php] El usuario a seleccionado la cantidad de 5 nodos");
$log -> writeline ('info', "[grafo5.php] El usuario a seleccionado el peso de  de AB");
$log ->close ();
?>