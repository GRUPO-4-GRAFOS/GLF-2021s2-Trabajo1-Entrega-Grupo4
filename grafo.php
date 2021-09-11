<?php
$n = $_POST["cantnodo"];
$a = $_POST["tipografo"];
if ($n != NULL){
    
    $fi=fopen("archivo.log", "a");
    //or die("problemas al crear archivo.txt");
     fwrite($fi, "Datos: ");
     fwrite($fi, "\n");
     fwrite($fi, "La cantidad de nodos es: ");
     fwrite($fi, $n);
     fwrite($fi, "\n");
     fwrite($fi, "El tipo de grafo es: ");
     fwrite($fi,$a);
     fwrite($fi, "\n");
     fwrite($fi,"-------------------- \n\n");
     fclose($fi);
   }

else {
    echo "Dato incompleto, vuelva y rellene la casilla";
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
    <tr>
        <td> </td>
        <td>ABCDE</td>
    </tr>  
    <tr>
        <td>A</td>
        <td><?php
        $bin1 = $_POST['Conectado'] - 1;
        $bin2 = $_POST ['Conectado1'] - 1 ; 
        $Matriz = array (Array (0,0,0,0,0), Array (0,0,0,0,0), Array (0,0,0,0,0) , Array (0,0,0,0,0) , Array (0,0,0,0,0));
        $Matriz[$bin1][$bin2]  = 1;
        $i=0;
            for($j= 0; $j <5; $j++){
                echo " " .$Matriz[$i][$j];
            }   
        ?> </td>
    </tr>
    <tr>
        <td>B</td>
        <td><?php
        $bin1 = $_POST['Conectado'] - 1;
        $bin2 = $_POST ['Conectado1'] - 1 ; 
        $Matriz = array (Array (0,0,0,0,0), Array (0,0,0,0,0), Array (0,0,0,0,0) , Array (0,0,0,0,0) , Array (0,0,0,0,0));
        $Matriz[$bin1][$bin2]  = 1;
        $i=1;
            for($j= 0; $j <5; $j++){
                echo " " .$Matriz[$i][$j];
            }   
        ?> </td>
    </tr>
    <tr>
        <td>C</td>
        <td><?php
        $bin1 = $_POST['Conectado'] - 1;
        $bin2 = $_POST ['Conectado1'] - 1 ; 
        $Matriz = array (Array (0,0,0,0,0), Array (0,0,0,0,0), Array (0,0,0,0,0) , Array (0,0,0,0,0) , Array (0,0,0,0,0));
        $Matriz[$bin1][$bin2]  = 1;
        $i=2;
            for($j= 0; $j <5; $j++){
                echo " " .$Matriz[$i][$j];
            }   
        ?> </td>
    </tr>
    <tr>
        <td>D</td>
        <td><?php
        $bin1 = $_POST['Conectado'] - 1;
        $bin2 = $_POST ['Conectado1'] - 1 ; 
        $Matriz = array (Array (0,0,0,0,0), Array (0,0,0,0,0), Array (0,0,0,0,0) , Array (0,0,0,0,0) , Array (0,0,0,0,0));
        $Matriz[$bin1][$bin2]  = 1;
        $i=3;
            for($j= 0; $j <5; $j++){
                echo " " .$Matriz[$i][$j];
            }   
        ?> </td>
    </tr>
    <tr>
        <td>E</td>
        <td><?php
        $bin1 = $_POST['Conectado'] - 1;
        $bin2 = $_POST ['Conectado1'] - 1 ; 
        $Matriz = array (Array (0,0,0,0,0), Array (0,0,0,0,0), Array (0,0,0,0,0) , Array (0,0,0,0,0) , Array (0,0,0,0,0));
        $Matriz[$bin1][$bin2]  = 1;
        $i=4;
            for($j= 0; $j <5; $j++){
                echo " " .$Matriz[$i][$j];
            }   
        ?> </td>
    </tr>
</table>
</body>
</html>

<form action ="./arbol.php"method ="post" >
<div style="text-align: center;">
 <input type ="submit" value = "arbol" style='width:70px; height:40px' class= "btn btn-outline-success mt-3 mb-3"/>
        </form>
        </div>