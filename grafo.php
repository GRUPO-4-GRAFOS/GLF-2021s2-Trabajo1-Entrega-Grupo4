<?php
  include './models/log.php';

  $num = 0;
  $archivo = file("./assets/graph_dataset.txt");
  $n = intval($archivo);

  if(intval($archivo) == 0){
    $num = $_POST["cantnodo"];
    $tipoGafo = $_POST["tipografo"]; 
  }

  if ($num != NULL){
    $log = new Log('./log/archivo.log');
    $log->writeline('Error', "[grafo.php]El usuario ha seleccionado la cantidad de nodos: $num ");
    $log->writeline('Info', "[grafo.php]El usuario ha seleccionado el tipo de grafo: $tipoGafo \n");
    $log->close();
  }

  if ($num != NULL && $tipoGafo != NULL){      
    $fi=fopen("./assets/graph_dataset.txt", "a");
    fwrite($fi, "Cantidad de nodos: ");
    fwrite($fi, "\n");
    fwrite($fi, $num);
    fwrite($fi, "\n");
    fwrite($fi, "Tipo de grafo: ");
    fwrite($fi, "\n");
    fwrite($fi, $tipoGafo);
    fwrite($fi, "\n");
    fclose($fi);
  }

  $archivo=file("./assets/graph_dataset.txt");

  if(intval($archivo) != 0){
    $n = intval($archivo[1]);
  }
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
    <title>Trabajo 1</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-sm-6">
          <form action="matriz.php" method="post">
            Nodo:
            <input 
              type="number" 
              name="Conectado" 
              class="form-control" 
              min="0" 
              max="7" 
            />
            Conecta con:
            <input 
              type="number" 
              name="Conectado1" 
              class="form-control" 
              min="0" 
              max="7"
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
                    echo 0;
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