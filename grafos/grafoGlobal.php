<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
      crossorigin="anonymous"
    >
    <link rel="stylesheet" href="../css/styles.css">
    <title>Matriz</title>
  </head>
  <body>
    <div class="titulo">
      <h1>Trabajo N°1 Grafo</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <?php
            ini_set('display_errors', '0');

            $matriz = array();
            $bin= array();
            $v = $_POST ["MatrizNodo"];

            function dibujarTabla(){
              $v = $_POST ["MatrizNodo"];
              $letra = 64;
              $v++;
      
              if(isset($_POST ["MatrizNodo"])){
                echo "
                  <form method=\"post\" action=\"./grafoGlobal.php\" class=\"my-3\">
                    <table border=\"1\" class=\"table\">
                      <caption>ESCRIBIR PESO DE CONEXION</caption>
                      <tr>
                        <th class=\"text-center\" scope=\"col\" colspan=".$v.">ESCRIBIR PESO DE CONEXION</th>
                      </tr>
                ";

                $v--;
                for($i = 0; $i <= $v; $i++){
                  echo "<tr>";
                  if($i == 0){
                    echo "<td> </td>";
                  }else{
                    echo "<td>".chr($letra + $i)."</td>";
                  }
                  for($j = 1; $j <= $v; $j++){
                    if($i == 0){
                      echo "
                      <td>".chr($letra + $j)."</td>
                      ";
                    }else{
                      $num = "txtn$i$j";
                      echo "
                      <td>
                        <input type=\"number\" name=\"$num\" autocomplete=\"off\"/>
                      </td>
                      ";  
                    }
                  }
                  echo"</tr>";
                }
                
                echo "
                <tr>
                  <td>
                     <input class=\"btn btn-outline-success\" type=\"submit\" id=\"MatrizNodo\" value=\"MatrizNodo\" />
                  </td>
                </tr>
                ";
                echo "</table>";
                echo"</form>";
              }

            }

            

            if(isset($_POST ["MatrizNodo"])){
              for($i = 0; $i <= $v; $i++){
                for($j = 0; $j <= $v; $j++){
                  $num = "textn$i$j";
                  $matriz[$i][$j]=(int)$_POST[$num];
                }
              }

              for($i=0; $i<=$v; $i++){
                for($j=0; $j<=$v; $j++){
                  $bin[$i][$j]=$matriz[$i][$j];
                }
              }
            }

            dibujarTabla();
            
          ?>
        </div> 
      </div>
    </div>
  </body>
</html>