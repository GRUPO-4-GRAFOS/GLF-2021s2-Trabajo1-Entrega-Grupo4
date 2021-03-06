<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="icon/png" href="http://4.bp.blogspot.com/-rYMEtsNWBCA/VgAnJXRxlKI/AAAAAAAAQU4/KnHQfSITOXw/s640/350px-Complete-edge-coloring.svg.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Trabajo 1</title>
  </head>
  <style>
  .rojo {
    color: #001240;
  }
  .azul {
    color: blue;
  }
  </style>
  <body>
    <div class="titulo mb-3">
          <h1>Trabajo N°1 Grafo</h1>
    </div>
    <div class="container">
      <div class="row">
      <div class="col-sm-6 my-5">
        <ul class="list-group">
        <li class="list-group-item text-center azul">Desarrolladores:  </li> 
          <li class="list-group-item">Lucas Castillo</li> 
          <li class="list-group-item">Nicolas Garay</li> 
          <li class="list-group-item">Rocio Leiva</li> 
          <li class="list-group-item">Paula Ruiz</li> 
          <li class="list-group-item">Víctor Venegas</li> 
        </ul>

        
        <p class="mt-3">
        <ul class="list-group">
          <li class="list-group-item text-center azul">Descripcion de la App web: </li> 
          <li class="list-group-item">a) Mostrar la matriz de caminos e indicara si el grafo es o no conexo</li> 
          
        </ul>
         </p>
      </div>
      <div class="col-sm-6 text-center">
        <form action="./grafos/camino3/grafo3.php" method="post">
            <legend><h2>Crear Grafo</h2></legend>
              <div class="Titulo">
                <label class="form-label rojo"><h4>Seleccione la cantidad de nodos</h4></label>
              </div>
              <button type="submit" class="btn btn-success mt-3 mb-3">3 Nodos</button>
        </form>
        <form action="./grafos/camino4/grafo4.php" method="post">
              <button type="submit" class="btn btn-success mt-3 mb-3">4 Nodos</button>
        </form>
        <form action="./grafos/camino5/grafo5.php" method="post">
              <button type="submit" class="btn btn-success mt-3 mb-3">5 Nodos</button>
        </form>
    </div>
  </body>
</html>