<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Trabajo 1</title>
  </head>
  <style>
        table, tr, td{ 
            border: 1px solid;
        }
    </style>
  <body>
    <div class="titulo">
      <h1>Trabajo N°1 Grafo</h1>
    </div>
<?php

  define('NUMBER_OF_NODES', 4);
  define('NUMBER_OF_EDGES_PER_NODE', 2);

  $adjacentList = array();
  fillRandomCosts($adjacentList);
  printToScreen($adjacentList);

  prim($adjacentList);

  function prim($adjacentList){
    $nodesInTree = array(0);
    $nodesNotInTree = array();
    for ($i = 1; $i < NUMBER_OF_NODES; ++$i) { $nodesNotInTree[] = $i; } while (count($nodesNotInTree) > 0) {
      $nextNodeToAdd = getNextEdge($adjacentList, $nodesInTree, $nodesNotInTree);
      $nodesInTree[] = $nextNodeToAdd;
      unset($nodesNotInTree[array_search($nextNodeToAdd, $nodesNotInTree)]);
    }
  }

  function getNextEdge($adjacentList, $nodesInTree, $nodesNotInTree){
    $minCost = 100;
    $nextNode = null;
    $edge = '';

    foreach ($nodesInTree as $node) {
      foreach ($adjacentList[$node] as $key => $value) {
        if (in_array($key, $nodesNotInTree) && $value < $minCost) {
            $nextNode = $key;
            $minCost = $value;
            $edge = $node.'-'.$key;
        }
      }
    }

    echo 'IN '.implode(',', $nodesInTree) .' NOT IN '.implode(',', $nodesNotInTree).' NEXT EDGE TO ADD '.$edge.'('.$minCost.')'.PHP_EOL;
    echo '<br>';
   
    return $nextNode;
  }

  function fillRandomCosts(&$adjacentList){
    for ($i = 0; $i < NUMBER_OF_NODES; ++$i) {
      $added = false;
      while (!$added) {
        for ($j = 0; $j < NUMBER_OF_EDGES_PER_NODE; ++$j) {
          $adjacentNode = rand(0, NUMBER_OF_NODES - 1);
            if ($adjacentNode != $i && $adjacentNode != $j) {
              $adjacentNodeCost = rand(1, 5);
              $adjacentList[$i][$adjacentNode] = $adjacentNodeCost;
              $adjacentList[$adjacentNode][$i] = $adjacentNodeCost;
              $added = true;
            }
        }
      }
    }
  }

  function printToScreen($adjacentList){
    for ($i = 0; $i < NUMBER_OF_NODES; ++$i) { 
      echo $i; 
      foreach ($adjacentList[$i] as $key => $value) {
        echo ' --> '.$key.'('.$value.')';
      }
      echo '<br>';
      echo PHP_EOL;
    }
  }
?>

<form action="../index.php" method="post">
    <div style="text-align: center;">
        <input type="submit" value="Volver a la pagina principal" style='width:240px; height:40px' class="btn btn-outline-success mt-3 mb-3" />
    </div>
</form>