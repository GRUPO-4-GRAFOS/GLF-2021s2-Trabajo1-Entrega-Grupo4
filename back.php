<?php
$n = $_POST["nodoinicial"];
$a = $_POST ["nodofinal"];

if ($n != NULL && $a != NULL){
    if($n >=0 && $a >=0){
        echo "Mi Nodo inicial es $n  y el nodo final es $a "."<br/>";
    }
    else {
        echo "Numeros negativos, intente nuevamente";
    }
}
else {
    echo "Datos incompletos, vuelva y rellene ambas casillas";
}


?>

<form action ="./index.php"method ="post" >
<div style="text-align: center;">
 <input type ="submit" value = "Volver" style='width:70px; height:40px' class= "btn btn-outline-success mt-3 mb-3"/>
        </form>
        </div>




