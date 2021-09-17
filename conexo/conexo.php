<?php
include '../models/log.php';
//LOG INFO
$log = new Log ('../log/loginfo.log');
$log -> writeline ('info', "[grafo3.php] El usuario a seleccionado la cantidad de 3 nodos");
$log -> writeline ('info', "[grafo3.php] El usuario a seleccionado el peso de $n[0][1] de AB");
$log ->close ();
?>