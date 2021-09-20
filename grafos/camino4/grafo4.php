<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
          $n[0][3]= (int)$_POST ["txtn03"];
          $n[1][0]= (int)$_POST ["txtn10"];
          $n[1][1]= (int)$_POST ["txtn11"];
          $n[1][2]= (int)$_POST ["txtn12"];
          $n[1][3]= (int)$_POST ["txtn13"];
          $n[2][0]= (int)$_POST ["txtn20"];
          $n[2][1]= (int)$_POST ["txtn21"];
          $n[2][2]= (int)$_POST ["txtn22"];
          $n[2][3]= (int)$_POST ["txtn23"];
          $n[3][0]= (int)$_POST ["txtn30"];
          $n[3][1]= (int)$_POST ["txtn31"];
          $n[3][2]= (int)$_POST ["txtn32"];
          $n[3][3]= (int)$_POST ["txtn33"];
        }
        for($i=0; $i<4; $i++){
          for($j=0; $j<4; $j++){
            $bin[$i][$j]=$n[$i][$j];
          }
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
        <div class="col">
          <form method="post" action="./grafo4.php" class="my-4">
          <table class="table"> 
              <caption>ESCRIBIR PESO DE CONEXION</caption>
              <tr>
                <th colspan="5" class="text-center" scope="col">ESCRIBIR PESO DE CONEXION</th>
              </tr>
              <tr>
                <td>  </td>
                <td> A </td>
                <td> B </td>
                <td> C </td>
                <td> D </td>
              </tr>
              <tr>
                <td> A </td>
                <td>
                  <input name="txtn00" type="number" id="txtn00" value="<?= 0?>" size = "4" readonly  min ="0" required/>
                </td>
                <td>
                  <input name="txtn01" type="number" id="txtn01" value="<?= $n[0][1]?>" size = "4"  min ="0" required/>
                </td>
                <td>
                  <input name="txtn02" type="number" id="txtn02" value="<?= $n[0][2]?>" size = "4"  min ="0" required/>
                </td>
                <td>
                  <input name="txtn03" type="number" id="txtn03"value="<?= $n[0][3]?>" size = "4"  min ="0" required/>
                </td>
              </tr>
              <tr>
                <td> B </td>
                <td>
                  <input name="txtn10" type="number" id="txtn10" value="<?= $n[1][0]?>" size ="4"  min ="0" required/>
                </td>
                <td>
                  <input name="txtn11" type="number" id="txtn11" value="<?= 0?>" size = "4" readonly min ="0" required/>
                </td>
                <td>
                  <input name="txtn12" type="number" id="txtn12" value="<?= $n[1][2]?>" size = "4" min ="0" required/>
                </td>
                <td>
                  <input name="txtn13" type="number" id="txtn13" value="<?= $n[1][3]?>" size = "4" min ="0" required/> 
                </td>
              </tr>
              <tr>
                <td> C </td>
                <td>
                  <input name="txtn20" type="number" id="txtn20"value="<?= $n[2][0]?>" size = "4"/>
                </td>
                <td>
                  <input name="txtn21" type="number" id="txtn21"value="<?= $n[2][1]?>" size = "4"/> 
                </td>
                <td>
                  <input name="txtn22" type="number" id="txtn22"value="<?= 0?>" size = "4" readonly/> 
                </td>
                <td>
                  <input name="txtn23" type="number" id="txtn23"value="<?= $n[2][3]?>" size = "4"/> 
                </td>
              </tr>
              <tr>
                <td> D </td>
                <td>
                  <input name="txtn30" type="number" id="txtn30" value="<?= $n[3][0]?>" size = "4" min ="0" required/>
                </td>
                <td>
                  <input name="txtn31" type="number" id="txtn31"value="<?= $n[3][1]?>" size = "4" min ="0" required/> 
                </td>
                <td>
                  <input name="txtn32" type="number" id="txtn32" value="<?= $n[3][2]?>" size = "4" min ="0" required/> 
                </td>
                <td>
                  <input name="txtn33" type="number" id="txtn33" value="<?= 0?>" size = "4" readonly min ="0" required/> 
                </td>
              </tr>
              <tr>
                <td>
                  <input name= "MatrizNodo" type="submit" id="MatrizNodo" value="Mostrar" class="btn btn-primary"/>
                </td>
              </tr>
            </table>
          </form>
      </div>
      <div class="col">
        <?php
          for($i=0; $i<4; $i++){
            for($j=0; $j<4; $j++){
              if($bin[$i][$j]>0){
                $bin[$i][$j]=1;
              }
            }
          }
          $cont=0;
          $ver=0;
          $elem=0;
          $i=0;   
          for($i=0; $i<3; $i++){
            for($j=0; $j<4; $j++){
              if($i != $j && $j > $i){  
                if($bin[$i][$j] ==1 || $bin[$j][$i] ==1 ){
                  $cont++;
                }
              }   
            }
          }  
          if ($cont==3){
            echo 'ES CONEXA!!';
          }
          else{
            echo 'NO ES CONEXA!!';
          }
        ?>
        <table class="table"> 
          <caption>Matriz De Adyacencia</caption>
            <tr>
              <th colspan="5" class="text-center" scope="col">Matriz De Adyacencia</th>
            </tr>   
            <tr>
              <td>  </td>
              <td> A </td>
              <td> B </td>
              <td> C </td>
              <td> D </td>
            </tr>
            <tr>
              <td> A </td>
              <td><?php echo $bin[0][0];?></td>
              <td><?php echo $bin[0][1];?></td>
              <td><?php echo $bin[0][2];?></td>
              <td><?php echo $bin[0][3];?></td>
            </tr>
            <tr>
              <td> B </td>
              <td><?php echo $bin[1][0];?></td>
              <td><?php echo $bin[1][1];?></td>
              <td><?php echo $bin[1][2];?></td>
              <td><?php echo $bin[1][3];?></td>
            </tr>
            <tr>
              <td> C </td>
              <td><?php echo $bin[2][0];?></td>
              <td><?php echo $bin[2][1];?></td>
              <td><?php echo $bin[2][2];?></td>
              <td><?php echo $bin[2][3];?></td>
            </tr>
            <tr>
              <td> D </td>
              <td><?php echo $bin[3][0];?></td>
              <td><?php echo $bin[3][1];?></td>
              <td><?php echo $bin[3][2];?></td>
              <td><?php echo $bin[3][3];?></td>
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
          <input type="submit" class="btn btn-primary mt-3" value="Enviar" />
        </form>
        <a href="#" class="btn btn-outline-success btn-lg my-5">Ver Arbol</a>
          <a href="../../index.php" class="btn btn-outline-danger btn-lg my-5">Volver al Inicio</a>
        </div>
      </div>
    </div>
  </body>
</html>
