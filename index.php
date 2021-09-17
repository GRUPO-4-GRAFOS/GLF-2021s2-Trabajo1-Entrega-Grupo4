<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Trabajo 1</title>
  </head>
  <body>
    <div class="titulo">
          <h1>Trabajo N°1 Grafo</h1>
    </div>
    <div class="container ">
      <div class="row">
      <div class="col-sm-6 my-5">
        <ul class="list-group">
        <li class="list-group-item"><FONT COLOR="blue"><center>Desarrolladores:  </center></FONT></li> 
          <li class="list-group-item">Lucas Castillo</li> 
          <li class="list-group-item">Nicolas Garay</li> 
          <li class="list-group-item">Rocio Leiva</li> 
          <li class="list-group-item">Paula Ruiz</li> 
          <li class="list-group-item">Víctor Venegas</li> 
        </ul>

        
        <p class="mt-3">
        <ul class="list-group">
          <li class="list-group-item "><FONT COLOR="blue"><center>Descripcion de la App web:  </center></FONT></li> 
          <li class="list-group-item">a) Mostrar la matriz de caminos e indicara si el grafo es o no conexo</li> 
          <li class="list-group-item">b)Mostrar el camino más corto para dos nodos a elección del usuario, mostrando la duración y la ruta de dicho camino</li> 
          <li class="list-group-item">c)Indicar si es hamiltoniano y/o euleriano, indicando el camino hamiltoniano (camino elemental que pasa por todos los vértices del grafo) y/o euleriano (camino simple que contiene todas las aristas del grafo) que lo define como tal</li> 
          <li class="list-group-item">d)Indicar el flujo máximo para un nodo de origen/entrada y otro de destino/salida a elección del usuario</li> 
          <li class="list-group-item">e)Obtener el árbol generador mínimo mediante prim o kruskal</li> 
          
        </ul>
         </p>
      </div>
      <div class="col-sm-6 text-center">
        <form action="./grafos/camino3/grafo3.php" method="post">
          <fieldset>
            <legend><h2>Crear Grafo</h2></legend>
              <div class="Titulo">
                <label class="form-label"><FONT COLOR="red"><h4>Seleccione la cantidad de nodos</h4></FONT></label>
              </div>
              <button type="submit" class="btn btn-outline-success mt-3 mb-3">3 Nodos</button>
          </fieldset>
        </form>
        <form action="./grafos/camino4/grafo4.php" method="post">
          <fieldset>
              <button type="submit" class="btn btn-outline-success mt-3 mb-3">4 Nodos</button>
          </fieldset>
        </form>
        <form action="./grafos/camino5/grafo5.php" method="post">
          <fieldset>
              <button type="submit" class="btn btn-outline-success mt-3 mb-3">5 Nodos</button>
          </fieldset>
        </form>
    </div>
  </body>
</html>