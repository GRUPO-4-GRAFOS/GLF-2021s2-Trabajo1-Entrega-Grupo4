<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="icon" type="icon/png" href="http://4.bp.blogspot.com/-rYMEtsNWBCA/VgAnJXRxlKI/AAAAAAAAQU4/KnHQfSITOXw/s640/350px-Complete-edge-coloring.svg.png">
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
        $mensajeLog = '[grafo3.php] El usuario a seleccionado el peso de '; 
        date_default_timezone_set('America/Santiago');
        $log = new Log ('../../log/loginfo.log');
        $log -> writeline ('info', '[grafo3.php] El usuario a seleccionado la cantidad de 3 nodos');
        $cuerda = array($mensajeLog,$n[0][1],' para la unión AB');
        $log -> writeline ('info', implode($cuerda));
        $cuerda = array($mensajeLog,$n[0][2],' para la unión AC');
        $log -> writeline ('info', implode($cuerda));
        $cuerda = array($mensajeLog,$n[1][0],' para la unión BA');
        $log -> writeline ('info', implode($cuerda));
        $cuerda = array($mensajeLog,$n[1][2],' para la unión BC');
        $log -> writeline ('info', implode($cuerda));
        $cuerda = array($mensajeLog,$n[2][0],' para la unión CA');
        $log -> writeline ('info', implode($cuerda));
        $cuerda = array($mensajeLog,$n[2][1],' para la unión CB');
        $log -> writeline ('info', implode($cuerda));
        $log ->close ();
      ?>
    <div class="container">
      <div class="row">   <div class= "col-md-6 offset-md-3" > <ul class="list-group">
          <li class="list-group-item text-center azul">Instrucciones: </li> 
          <li class="list-group-item">a) En los canales de texto poner el peso de la arista</li> 
          <li class="list-group-item">b) Si su arista no tiene conexion con esos nodos, por favor ingrese 0</li> 
          <li class="list-group-item">c) Presione "mostrar" para  actualizar la matriz de adyacencia</li> 
          </ul></div></div>
      <div class="row">
              <div class="col-sm-7">
          <form method="post" action="./grafo3.php" class="my-4">
            <table class="table"> 
              <caption>CLICK A "MOSTRAR" PARA VER SOLUCIONES</caption>
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
          ?>
          <table class="table mt-4"> 
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
          <tr>EL GRAFO ES:  </tr>
          <?php 
            $cont=0;
            $ver=0;
            $elem=0;
            $i=0;   
            for($i=0; $i<2; $i++){
              for($j=0; $j<3; $j++){
                if(($i != $j && $j > $i) && ($bin[$i][$j] ==1 || $bin[$j][$i] ==1 )){  
                    $cont++;
                }
              }   
            } 
            if ($cont==2){
              echo "CONEXO!! <br/>";
            }
            else{
              echo "NO CONEXO!! <br/>";
            }
            
            for($i=0; $i<2; $i++){
              for($j=0; $j<3; $j++){
                if(($i != $j && $j > $i) && (($bin[$i][$j] ==1 && $bin[$j][$i] == 0) || ($bin[$i][$j] ==0 && $bin[$j][$i] == 1)) ){ 
                    $ver++;
                }   
              }
            }
          ?>
            <p>Es del tipo</p>
            <?php
            if($ver>0){
              echo "ES Dirigido! <br/>";
            }
            else{
              echo "Es NO Dirigido! <br/>";
            } 
            ?>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <a href="../../index.php" class="btn btn-outline-danger btn-lg my-5">Volver al Inicio</a>
        </div>
      </div>
    </div>
  </body>
</html>