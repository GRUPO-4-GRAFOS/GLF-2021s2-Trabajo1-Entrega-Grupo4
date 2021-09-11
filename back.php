<p style="background:#FF813E; color:white; font-weight:bold; padding:15px; border:3px solid #B34F19; margin-top:40px; margin-bottom:40px; text-align:center; font-size:22px; border-radius:10px;">Trabajo 1: Grafos</p>


<?php
$n = $_POST["cantnodo"];
if ($n != NULL){
    
    $fi=fopen("archivo.txt", "a");
    //or die("problemas al crear archivo.txt");
     fwrite($fi, "Datos: ");
     fwrite($fi, "\n");
     fwrite($fi, $_POST['cantnodo']);
     fwrite($fi, "\n");
     fwrite($fi,"-------------------- \n\n");
     fclose($fi);
    echo"Datos guardados";
   }

else {
    echo "Dato incompleto, vuelva y rellene la casilla";
}


?>


 <form action ="./index.php"method ="post" >
<div style="text-align: center;">
 <input type ="submit" value = "Volver" style='width:70px; height:40px' class= "btn btn-outline-success mt-3 mb-3"/>
        </form>
        </div>

        
<!--<form action ="./grafo.php"method ="post" >
<div style="text-align: center;">
 <input type ="submit" value = "Siguiente" style='width:70px; height:40px' class= "btn btn-outline-success mt-3 mb-3"/>
        </form>
        </div>
-->
       
       
       


