<?php
  function implodeArrayofArrays($array, $glue  = ', ') {
    $output = '';
    foreach ($array as $subarray) {
        $output .= implode('-', $subarray);
    }
    return $output;
  }

  error_reporting(E_ALL ^ E_NOTICE);

  include './models/log.php';

  $nodoss = "./assets/graph_dataset.txt"; 
  $matrizz = "./assets/matriz_dataset.txt"; 

  $ini = 0;
  $ter = 0;
  $num = 0;

  $ini = $_POST["inicio_arista"];
  $ter = $_POST["termino_arista"];

  if($ini == NULL || $ter == NULL){
    $ini = 0;
    $ter = 0;
  }

  if($num == 0){
    $num = $_POST["cantnodo"];
    $tipoGrafo = $_POST["tipografo"];
  }

  $archivo = file($nodoss);

  if($num == 0){
    $num = intval($archivo[1]);
  }

  $fp = fopen($nodoss, "a");
  fwrite($fp, "Cantidad de nodos:");
  fwrite($fp, "\n");
  fwrite($fp, $num);
  fwrite($fp, "\n");
  fwrite($fp, "Tipo:");
  fwrite($fp, "\n");
  fwrite($fp, $tipoGrafo);
  fclose($fp);

  if ($num != NULL){
    $log = new Log('./log/loginfo.log');
    $log->writeline('Info', "[grafo.php]El usuario ha seleccionado la cantidad de nodos: $num ");
    $log->writeline('Info', "[grafo.php]El usuario ha seleccionado el tipo de grafo: $tipoGafo \n");
    $log->close();
  }

  for($i = 0; $i <= 0; $i++){
    for($j = 0; $j <= 0; $j++){
      $matriz[$i][$j] = 0;
    }
  }

  if($ini != 0 && $ter != 0){

    echo implodeArrayofArrays($matriz);

    $ff = fopen($matrizz, "a");
    fwrite($ff,implodeArrayofArrays($matriz));

    $matriz[$ini][$ter] = 1;
    $matriz[$ter][$ini] = 1;

  }

  $n = $num;

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta 
      http-equiv="X-UA-Compatible" 
      content="IE=edge"
    >
    <meta 
      name="viewport" 
      content="width=device-width, initial-scale=1.0"
    >
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" 
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" 
      crossorigin="anonymous"
    >
    <link rel="stylesheet" href="./css/styles.css">
    <title>Trabajo 1</title>
  </head>
  <body>
  <div class="titulo">
          <h1>Trabajo N°1 Grafo</h1>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-sm-6">
          <form action="grafo.php" method="post">
            Nodo:
            <input 
              type="number" 
              name="inicio_arista" 
              class="form-control" 
              min="0" 
              max="10" 
            />
            Conecta con:
            <input 
              type="number" 
              name="termino_arista" 
              class="form-control" 
              min="0" 
              max="10"
            />
            <input 
              type="submit" 
              value="Enviar" 
              class="btn btn-primary btn-lg my-3"
            />
          </form>
        </div>
        <div class="col-sm-6">
          <table class="table table-primary">
           
           
           
           
           
           <?php       
              $cont = 0;
              for($i = 0; $i <= $n; $i++){
                echo'<tr>';
                for($j = 0; $j <= $n; $j++){
                  echo '<td>';
                  if($i == 0){
                    echo $cont;
                    $cont++;
                  }else{
                    if($cont == $n+1){
                      $cont = 1;
                    }
                    if($j == 0){
                      echo $cont;
                      $cont++;
                    }
                  }
                  if($i != 0 && $j != 0){
                    if($matriz[$i][$j] == NULL){
                      echo 0;
                    }else{
                      echo $matriz[$i][$j];
                    }
                  }        
                  echo '</td>';
                } 
                echo'</tr>';
              }
            ?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>