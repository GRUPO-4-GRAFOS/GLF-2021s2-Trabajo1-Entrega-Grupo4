<?php 
  $matriz = array (
    array('-','A','B','C'),
    array('A',0,0,0),
    array('B',0,0,0),
    array('C',0,0,0)
  );

  if( !empty($_POST['A_B']) ){
    $matriz[1][2] = $_POST['A_B'];
  }
  if( !empty($_POST['B_A']) ){
    $matriz[2][1] = $_POST['B_A'];
  }
  if( !empty($_POST['A_C']) ){
    $matriz[1][3] = $_POST['A_C'];
  }
  if( !empty($_POST['C_A']) ){
    $matriz[3][1] = $_POST['C_A'];
  }
  if( !empty($_POST['C_B']) ){
    $matriz[3][2] = $_POST['C_B'];
  }
  if( !empty($_POST['B_C']) ){
    $matriz[2][3] = $_POST['B_C'];
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
          <table class="table table-primary">
            <caption>Matriz</caption>
            <tr>
              <th scope="col" class="text-center" colspan="4">Matriz</th>
            </tr>
            <?php       
              $cont = 0;
              for($i = 0; $i <= 3; $i++){
                echo'<tr>';
                for($j = 0; $j <= 3; $j++){
                  echo '<td>';
                    echo $matriz[$i][$j];       
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