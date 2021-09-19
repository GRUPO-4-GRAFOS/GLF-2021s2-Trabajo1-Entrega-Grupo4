<?php
include '../models/log.php';
//LOG INFO
date_default_timezone_set("America/Santiago");
$log = new Log ('../log/loginfo.log');
$log -> writeline ('info', "[grafo4.php] El usuario a seleccionado la cantidad de 4 nodos");
$log -> writeline ('info', "[grafo4.php] El usuario a seleccionado el peso de  de AB");
$log ->close ();
?>