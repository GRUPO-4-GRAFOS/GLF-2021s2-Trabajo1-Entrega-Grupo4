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
      error_reporting(0);
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
    ?>
    <form method="post" action="./grafo3.php">
      <table border="0"> 
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
            <input name= "MatrizNodo" type="submit" id="MatrizNodo" value="Mostrar"/></td>
          </td>
        </tr>
      </table>
    </form>
    <?php
      for($i=0; $i<3; $i++){
        for($j=0; $j<3; $j++){
          if($bin[$i][$j]>0){
            $bin[$i][$j]=1;
          }
        }
      }
    ?>
    <table border="0"> 
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
    <form action="../../conexo/conexo3.php" method="post">
      <button type="submit" class="btn btn-outline-success mt-3 mb-3">Conexo?</a>
    </form>
    <form action="../../index.php" method="post">
      <button type="submit" class="btn btn-outline-success mt-3 mb-3">volver</button>
    </form>

  </body>
</html>