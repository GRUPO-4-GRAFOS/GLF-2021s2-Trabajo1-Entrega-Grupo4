<?php
$num = 0;
$archivo = file("graph_dataset.txt");
$n = intval($archivo);

if(intval($archivo) == 0){
    $num = $_POST["cantnodo"];
    $a = $_POST["tipografo"]; 
}

date_default_timezone_set("America/Santiago");
$fechaActual = date ( 'd-m-Y H:i:s' );
if ($num != NULL){
    
    $fi=fopen("archivo.log", "a");
    //or die("problemas al crear archivo.txt");
     fwrite($fi, "[grafo.php](");
     fwrite($fi, $fechaActual);
     fwrite($fi, ")El usuario ha seleccionado la cantidad de nodos: ");
     fwrite($fi, $num);
     fwrite($fi, "\n");
     fwrite($fi, "[grafo.php](");
     fwrite($fi, $fechaActual); 
     fwrite($fi, ")El usuario ha seleccionado el tipo de grafo: ");
     fwrite($fi,$a);
     fwrite($fi, "\n");
     fclose($fi);
}

if ($num != NULL && $a != NULL){
    
    $fi=fopen("graph_dataset.txt", "a");
    //or die("problemas al crear archivo.txt");

     fwrite($fi, "Cantidad de nodos: ");
     fwrite($fi, "\n");
     fwrite($fi, $num);
     fwrite($fi, "\n");
     fwrite($fi, "Tipo de grafo: ");
     fwrite($fi, "\n");
     fwrite($fi, $a);
     fwrite($fi, "\n");
     fclose($fi);

}

$archivo=file("graph_dataset.txt");
if(intval($archivo) != 0){
    $n = intval($archivo[1]);
    echo $n;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{ 
            border: 1px solid;
        }
    </style>
</head>
<body>
        <form action="matriz.php" method="post">
        Nodo:<input type="number" name="Conectado" class="form-control" min="0" max="7" />
        Conecta con:<input type="number" name="Conectado1" class="form-control" min="0" max="7" />
        <input type="submit" value="Enviar"/>

<table>

<?php       
        $cont = 0;
        for($i = 0; $i <= $n; $i++){
            ?>
            <tr>
            <?php
            for($j = 0; $j <= $n; $j++){
                ?>
                    <td>
                        <?php
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
                        ?> <!-- aca va el dato que se escribe dentro de cada cuadrito de la matriz -->
                    </td>
                <?php
            }
            ?>
            </tr>
            <?php
        }
    ?>
</table>
</body>
</html>