<?php 
    $matriz = array (
        array('-','A','B','C','D','E'),
        array('A',0,0,0,0,0),
        array('B',0,0,0,0,0),
        array('C',0,0,0,0,0),
        array('D',0,0,0,0,0),
        array('E',0,0,0,0,0)
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
    if( !empty($_POST['A_D']) ){
        $matriz[1][4] = $_POST['A_D'];
    }
    if( !empty($_POST['D_A']) ){
        $matriz[4][1] = $_POST['D_A'];
    }
    if( !empty($_POST['B_D']) ){
        $matriz[2][4] = $_POST['B_D'];
    }
    if( !empty($_POST['D_B']) ){
        $matriz[4][2] = $_POST['D_B'];
    }
    if( !empty($_POST['C_D']) ){
        $matriz[3][4] = $_POST['C_D'];
    }
    if( !empty($_POST['D_C']) ){
        $matriz[4][3] = $_POST['D_C'];
    }
    if( !empty($_POST['A_E']) ){
        $matriz[1][5] = $_POST['A_E'];
    }
    if( !empty($_POST['E_A']) ){
        $matriz[5][1] = $_POST['E_A'];
    }
    if( !empty($_POST['B_E']) ){
        $matriz[2][5] = $_POST['B_E'];
    }
    if( !empty($_POST['E_B']) ){
        $matriz[5][2] = $_POST['E_B'];
    }
    if( !empty($_POST['C_E']) ){
        $matriz[3][5] = $_POST['C_E'];
    }
    if( !empty($_POST['E_C']) ){
        $matriz[5][3] = $_POST['E_C'];
    }
    if( !empty($_POST['D_E']) ){
        $matriz[4][5] = $_POST['D_E'];
    }
    if( !empty($_POST['E_D']) ){
        $matriz[5][4] = $_POST['E_D'];
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
            <?php       
              $cont = 0;
              for($i = 0; $i <= 5; $i++){
                echo'<tr>';
                for($j = 0; $j <= 5; $j++){
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
  //TODA OPERATORIA CON LA MATRIZ HECHA CON LOS DATOS YA EXISTENTES SE HACE ACA
  //-VER SI ES CONEXO
  //-VER SI ES EULERIANO
  //-VER SI ES HAMILTONIANO
  //-ARBOL GENERADOR MINIMO

?>