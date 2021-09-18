<?php 
function matriz_conexa($matriz,$cantidad)
    {
        $numerador = arreglo_simple($cantidad);
        for($i=0;$i<$cantidad;$i++)
        {
            $x=0;
            $y=0;
    
            while($x==0)
            {   
                $x = $matriz[$i][$numerador[$y]];

                if($x==0) 
                {
                    $y++;
                    if($y == sizeof($numerador))
                    {    
                       
                        return false;
                     
                    }
                   
                }
                else
                {   
                    $numerador = quitar_array($numerador,$numerador[$y]);
                   
                }
            }
        }
        
        return true;
    }
    
    

    function arreglo_simple($cantidad)
    {
        $arreglo = array();
        for($i=0;$i<$cantidad;$i++) 
        {
            array_push($arreglo,$i);

        }
        return $arreglo;
    }

    function quitar_array($array,$valor)
    {
        $x=0;

        while($valor!=$array[$x])
        {
            $x++;
        }
        for($x;$x<sizeof($array)-1;$x++)
        {
            $array[$x]=$array[$x+1];
        }
        unset($array[sizeof($array)-1]);
        return $array;
    }
?>
<form action="../grafos/camino3/grafo3.php" method="post">
              <button type="submit" class="btn btn-outline-success mt-3 mb-3">volver</button>
</form>
<form action="../caminomascorto/caminomascorto3.php" method="post"> 
          Nodo de incio: <select name="nodoinicio">
            <option>A</option>
            <option>B</option>
            <option>C</option>
</select>
          Nodo Final: <select name="nodofinal">
            <option>A</option>
            <option>B</option>
            <option>C</option>
</select>
              <button type="submit" class="btn btn-outline-success mt-3 mb-3"> camino mas corto</button>
         
</form>