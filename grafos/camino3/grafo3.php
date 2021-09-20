<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>Trabajo 1</title>
  </head>
  <body>
    <div class="titulo">
      <h1>Trabajo N°1 Grafo</h1>
    </div>
      <?php
        include '../../models/log.php';
        ini_set('display_errors', '0');
        $s=0; $i=0; $j=0;
        $n=array();
        $bin= array();
        if(isset($_POST ["MatrizNodo"])){
          $n[0][0]= (int)$_POST ["txtn00"];
          $n[0][1]= (int)$_POST ["txtn01"];
          $n[0][2]= (int)$_POST ["txtn02"];
          $n[1][0]= (int)$_POST ["txtn10"];
          $n[1][1]= (int)$_POST ["txtn11"];
          $n[1][2]= (int)$_POST ["txtn12"];
          $n[2][0]= (int)$_POST ["txtn20"];
          $n[2][1]= (int)$_POST ["txtn21"];
          $n[2][2]= (int)$_POST ["txtn22"];
        }
        for($i=0; $i<3; $i++){
          for($j=0; $j<3; $j++){
            $bin[$i][$j]=$n[$i][$j];
          }
        }
          //LOG INFO
        date_default_timezone_set('America/Santiago');
        $log = new Log ('../../log/loginfo.log');
        $log -> writeline ('info', '[grafo3.php] El usuario a seleccionado la cantidad de 3 nodos');
        $cuerda = array('[grafo3.php] El usuario a seleccionado el peso de ',$n[0][1],' para la unión AB');
        $log -> writeline ('info', implode($cuerda));
        $cuerda = array('[grafo3.php] El usuario a seleccionado el peso de ',$n[0][2],' para la unión AC');
        $log -> writeline ('info', implode($cuerda));
        $cuerda = array('[grafo3.php] El usuario a seleccionado el peso de ',$n[1][0],' para la unión BA');
        $log -> writeline ('info', implode($cuerda));
        $cuerda = array('[grafo3.php] El usuario a seleccionado el peso de ',$n[1][2],' para la unión BC');
        $log -> writeline ('info', implode($cuerda));
        $cuerda = array('[grafo3.php] El usuario a seleccionado el peso de ',$n[2][0],' para la unión CA');
        $log -> writeline ('info', implode($cuerda));
        $cuerda = array('[grafo3.php] El usuario a seleccionado el peso de ',$n[2][1],' para la unión CB');
        $log -> writeline ('info', implode($cuerda));
        $log ->close ();
      ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-7">
          <form method="post" action="./grafo3.php" class="my-4">
            <table class="table"> 
              <caption>ESCRIBIR PESO DE CONEXION</caption>
              <tr>
                <th colspan="4" class="text-center" scope="col">ESCRIBIR PESO DE CONEXION</th>
              </tr>
              <tr>
                <td>  </td>
                <td> A </td>
                <td> B </td>
                <td> C </td>  
              </tr>
              <tr>
                <td> A </td>
              <td>
                <input name="txtn00" type="number" id="txtn00"value="<?= 0?>" size = "3" readonly min ="0" required/> 
              </td>
              <td>
                <input name="txtn01" type="number" id="txtn01"value="<?= $n[0][1]?>" size = "3" min ="0"  required/> 
              </td>
              <td>
                <input name="txtn02" type="number" id="txtn02" value="<?= $n[0][2]?>" size = "3" min ="0" required/> 
              </td>
              </tr>
              <tr>
                <td> B </td>
                <td>
                  <input name="txtn10" type="number" id="txtn10" value="<?= $n[1][0]?>" size = "3" min ="0" required/> 
                </td>
                <td>
                  <input name="txtn11" type="number" id="txtn11" value="<?= 0?>" size = "3" readonly min ="0" required/>
                </td>
                <td>
                  <input name="txtn12" type="number" id="txtn12" value="<?= $n[1][2]?>" size = "3" min ="0" required/> 
                </td>
              </tr>
              <tr>
                <td> C </td>
                <td>
                  <input name="txtn20" type="number" id="txtn20" value="<?= $n[2][0]?>" size = "3" min ="0" required/> 
                </td>
                <td>
                  <input name="txtn21" type="number" id="txtn21" value="<?= $n[2][1]?>" size = "3" min ="0" required/> 
                </td>
                <td>
                  <input name="txtn22" type="number" id="txtn22" value="<?= 0?>" size = "3" readonly min ="0" required/> 
                </td>
              </tr>
              <tr></tr>
              <tr>
                <td>
                  <input name= "MatrizNodo" type="submit" id="MatrizNodo" value="Mostrar" class="btn btn-primary"/>
                </td>
              </tr>
            </table>
          </form>
      </div>
      <div class="col-sm-5">
        <?php
          $cont=0;
          $ver=0;
          $elem=0;
          for($i=0; $i<3; $i++){
            for($j=0; $j<3; $j++){
              if($bin[$i][$j]>0){
                  $bin[$i][$j]=1;
              }
            }
          }
          $i=0;
          for($j=0; $j<3; $j++){
            if($i != $j && $j > $i){  
              if($bin[$i][$j] ==1 || $bin[$j][$i] ==1 ){
                  $ver= $i+1; 
                  $cont++;
                  if($bin[$ver][$ver+1] == 1 ||$bin[$ver+1][$ver] == 1 ){
                    echo 'ES CONEXA!!';
                    $elem++;
                  }
              }   
            }
          }
          if ($cont==2){
            echo 'ES CONEXA!!';
          }
          if ($cont < 2 && $elem==0){
            echo 'NO ES CONEXA!!';
          }
          ?>
          <table border="0" class="table"> 
            <caption>Matriz De Adyacencia</caption>
            <tr>
              <th colspan="4" scope="col" class="text-center">Matriz De Adyacencia</th>
            </tr>   
            <tr>
              <td>  </td>
              <td> A </td>
              <td> B </td>
              <td> C </td>
            </tr>
            <tr>
              <td> A </td>
              <td><?php echo $bin[0][0];?></td>
              <td><?php echo $bin[0][1];?></td>
              <td><?php echo $bin[0][2];?></td>
            </tr>
            <tr>
              <td> B </td>
              <td><?php echo $bin[1][0];?></td>
              <td><?php echo $bin[1][1];?></td>
              <td><?php echo $bin[1][2];?></td>
            </tr>
            <tr>
              <td> C </td>
              <td><?php echo $bin[2][0];?></td>
              <td><?php echo $bin[2][1];?></td>
              <td><?php echo $bin[2][2];?></td>
            </tr>
          </table>

        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <form action="./grafo3.php">
          <label for="nodoInicio" class="my-3">Nodo Inicio: </label>
          <select id="nodoInicio" class="form-select">
            <option selected>Seleccione un Nodo</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
          </select>
          <label for="nodoFinal" class="my-3">Nodo Final: </label>
          <select id="nodoInicio" class="form-select">
            <option selected>Seleccione un Nodo</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
</select>
              <button type="submit" class="btn btn-outline-success mt-3 mb-3"> camino mas corto</button>

</form>
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
    <form action="../../index.php" method="post">
    <div style="text-align: center;">
        <input type="submit" value="Volver a la pagina principal" style='width:240px; height:40px' class="btn btn-outline-success mt-3 mb-3" />
    </div>
    </form>

  </body>
</html>