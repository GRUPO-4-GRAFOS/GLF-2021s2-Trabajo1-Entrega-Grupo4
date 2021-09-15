<?php 
    $matriz = array (
        array('-','A','B','C','D'),
        array('A',0,0,0,0),
        array('B',0,0,0,0),
        array('C',0,0,0,0),
        array('D',0,0,0,0)
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
              for($i = 0; $i <= 4; $i++){
                echo'<tr>';
                for($j = 0; $j <= 4; $j++){
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