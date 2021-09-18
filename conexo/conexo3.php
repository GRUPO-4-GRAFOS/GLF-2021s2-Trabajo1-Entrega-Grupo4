<?php
include '../models/log.php';
//LOG INFO
date_default_timezone_set("America/Santiago");
$log = new Log ('../log/loginfo.log');
$log -> writeline ('info', "[grafo3.php] El usuario a seleccionado la cantidad de 3 nodos");
$log -> writeline ('info', "[grafo3.php] El usuario a seleccionado el peso de  de AB");
$log ->close ();
?>
<?php 
  function conexo($matrix){
    $desc = 0;
    if($matrix[1][2] == 0 && $matrix[2][1] == 0){
      $desc++;
    }
    if($matrix[2][3] == 0 && $matrix[3][2] == 0){
     $desc++;
    }
    if($matrix[3][1] == 0 && $matrix[1][3] == 0){
     $desc++;
    }
    if($desc >= 2){
      return 'No es conexo';
    }
    else{
      return 'es conexo';
    }
  }

  $esono = conexo($matriz);
  echo $esono;
  //TODA OPERATORIA CON LA MATRIZ HECHA CON LOS DATOS YA EXISTENTES SE HACE ACA
  //-VER SI ES EULERIANO
  //-VER SI ES HAMILTONIANO
  //-ARBOL GENERADOR MINIMO
?>

<form action="../grafos/camino3/grafo3.php" method="post">
              <button type="submit" class="btn btn-outline-success mt-3 mb-3">volver</button>
</form>
<form action="../caminomascorto/caminomascorto.php" method="post"> 
          Nodo de incio: <select name="nodoinicio">
            <option>A</option>
            <option>B</option>
            <option>C</option>
</select>
          Nodo Final: <select name="nodofinal">
            <option>A</option>
            <option>B</option>
            <option>C</option>
</select>
              <button type="submit" class="btn btn-outline-success mt-3 mb-3"> camino mas corto</button>
         
</form>