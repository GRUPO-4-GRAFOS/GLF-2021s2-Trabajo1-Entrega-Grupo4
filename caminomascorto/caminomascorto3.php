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
<form action="../arbol/arbol3.php" method="post">
    <div style="text-align: center;">
        <input type="submit" value="arbol" style='width:70px; height:40px' class="btn btn-outline-success mt-3 mb-3" />
        </div>
</form>
<form action="../grafos/camino3/grafo3.php" method="post">
    <div style="text-align: center;">
        <input type="submit" value="volver" style='width:70px; height:40px' class="btn btn-outline-success mt-3 mb-3" />
    </div>
</form>

