<?php
$n = (string)$_POST("nodoinicio");
$m = (string)$_POST("nodofinal");

$orig = "I'll \"walk\" the <b>dog</b> now";

$a = htmlentities($orig);

$b = html_entity_decode($a);

echo $a; // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now

echo $b; // I'll "walk" the <b>dog</b> now
?>
if ($n == $m){
    echo "La distancia es igual a 0 por lo tanto la duración es 0";
}
else{
    echo  ":3";
/**
 * Requerir los datos para el algoritmo.
 * Para esto voy a leer desde un archivo CSV con datos aleatorios.
 */
// $nombredearchivo = 'datos.csv';


/**
 * La estructura del gráfico contiene 'origen', 'destino' y 'peso'. Eso es todo lo que necesitamos para este algoritmo.
 * Lo necesitamos de esta manera:
 * [origen1]
 * [destino1] = peso >
 * [destino2] = peso >
 * ...
 */
/* $gráfico = matriz();


//Abra el archivo de datos para leer y construir la lista de adyacencia.
//IMPORTANTE: se supone que los elementos del CSV deben estar separados por punto y coma (;).
if (($h = fopen("{$filename}", "r")) !== FALSE) {
    //Cada línea del archivo (excepto la primera) se convierte en una matriz individual que llamamos $data
     $i = 0;
    while (($data = fgetcsv($h, 1000, ";")) !== FALSE) {
        if ($i > 0) {
             $originID = (int)$data[0];
             $destinationID = (int)$data[1];

             $gráfico[$originID][$destinationID] =  $data[2];
        }
        $i++;
    }
    fclose($h);
}


//La fuente es el nodo de origen desde el que vamos a buscar.
 $fuente = 5950;


//Comience el algoritmo de Dijkstra con el gráfico y la fuente, lo que indica que es un gráfico dirigido.
 $dijkstra = nuevo Dijkstra($gráfico,  $fuente, $verdadero);


//Y ahora, vamos a mostrar algunos resultados...
echo "Tiempo de cálculo".  $dijkstra->getAlgorithmTime(). " segundos.\n\n";

//Muestre las distancias y las matrices anteriores.
echo "Matriz de distancias: \n";
print_r($dijkstra->getDistances());

echo "\nNatriz anterior: \n";
print_r($dijkstra->getAnterior());


//Y muestra la distancia más corta a un par de vértices.
 $destino = 9583;
 $shortest_path1 =  $dijkstra->shortestPathTo($destino);
echo "\nSe ruta de acceso de prueba a 9583: \n";
print_r($shortest_path1);


 $destino = 4907;
 $shortest_path2 =  $dijkstra->shortestPathTo($destino);
echo "\nSe ruta de acceso de prueba a 4907: \n";
print_r($shortest_path2)*/
}
?>