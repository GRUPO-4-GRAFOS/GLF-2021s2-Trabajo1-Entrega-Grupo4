<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Trabajo 1</title>
  </head>
  <style>
        table, tr, td{ 
            border: 1px solid;
        }
    </style>
  <body>
    <div class="titulo">
      <h1>Trabajo N°1 Grafo</h1>
    </div>

<?php
if(isset($_POST ["MatrizNodo"])){
   $peso[0][0]= (int)$_POST ["txtn00"];
   $peso[0][1]= (int)$_POST ["txtn01"];
   $peso[0][2]= (int)$_POST ["txtn02"];

   $peso[1][0]= (int)$_POST ["txtn10"];
   $peso[1][1]= (int)$_POST ["txtn11"];
   $peso[1][2]= (int)$_POST ["txtn12"];

   $peso[2][0]= (int)$_POST ["txtn20"];
   $peso[2][1]= (int)$_POST ["txtn21"];
   $peso[2][2]= (int)$_POST ["txtn22"];
 }
 
include '../models/log.php';
//LOG INFO
date_default_timezone_set("America/Santiago");
$log = new Log ('../log/loginfo.log');
$log -> writeline ('info', "[grafo5.php] El usuario a seleccionado la cantidad de 5 nodos");
$log -> writeline ('info', "[grafo5.php] El usuario a seleccionado el peso de  de AA es de 0");
$log -> writeline ('info', "[grafo5.php] El usuario a seleccionado el peso de  de AB es de  $peso[0][1] ");
$log -> writeline ('info', "[grafo5.php] El usuario a seleccionado el peso de  de AC es de ");
$log -> writeline ('info', "[grafo5.php] El usuario a seleccionado el peso de  de BA es de ");
$log -> writeline ('info', "[grafo5.php] El usuario a seleccionado el peso de  de BB es de 0");
$log -> writeline ('info', "[grafo5.php] El usuario a seleccionado el peso de  de BC es de ");
$log -> writeline ('info', "[grafo5.php] El usuario a seleccionado el peso de  de CA es de ");
$log -> writeline ('info', "[grafo5.php] El usuario a seleccionado el peso de  de CB es de ");
$log -> writeline ('info', "[grafo5.php] El usuario a seleccionado el peso de  de CC es de 0");
$log ->close ();


if ($_POST["nodoinicio"] == $_POST["nodofinal"]){
    echo "La distancia es igual a 0 por lo tanto la duración es 0";
}
else{
   echo "hola";
/* for($i=0; $i<3; $i++){
   for($j=0; $j<3; $j++){
     if ($peso[i][j]  > 0){

     }
     
   }

  
   function dijkstra($grafo, $source(NOSE), $target (NOSE)){
      $vertices = array ();
      $neighbours = array ();
      $path = array ();
      foreach ($grafo as $edge){
          array_push($vertices, $edge[0], $edge[1]);
          $neighbours[$edge[0][] = array('endeEdge'-> $edge[1], 'cost'-> $edge[2]);
      
        }
      $vertices = array_unique($vertices);

      foreach ($vertices as $vertex){
          $dist[$vertex] = INF;
          $previous[$vertex] = NULL;
      }

      $dist[$source] = 0;
      $g =$vertices;
      while (count($g) > 0){
       $min = INF;
       foreach ($g as $vertex){
        if ($dist[$vertex]  < $min){
           $min = $dist[$vertex];
           $u =
        }       
    }
       }   
      }
      } 
   } */ 
}
?>
<form action="../arbol/arbol5.php" method="post">
    <div style="text-align: center;">
        <input type="submit" value="arbol" style='width:70px; height:40px' class="btn btn-outline-success mt-3 mb-3" />
        </div>
</form>
<form action="../conexo/conexo5.php" method="post">
    <div style="text-align: center;">
        <input type="submit" value="volver" style='width:70px; height:40px' class="btn btn-outline-success mt-3 mb-3" />
    </div>
</form>
 </body>
</html>
