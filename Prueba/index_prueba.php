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
          <li class="list-group-item">Lucas Castillo</li> 
          <li class="list-group-item">Nicolas Garay</li> 
          <li class="list-group-item">Rocio Leiva</li> 
          <li class="list-group-item">Paula Ruiz</li> 
          <li class="list-group-item">Víctor Venegas</li> 
        </ul>
        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut unde dignissimos aliquam labore dolorem mollitia praesentium voluptas iure velit dolores animi consequatur, nisi sit reprehenderit, beatae fuga dicta dolore aliquid.</p>
      </div>
      <div class="col-sm-6 text-center">
        <form action="./camino3/grafo3.php" method="post">
          <fieldset>
            <legend>Crear Grafo</legend>
              <div class="titulo">
                <label class="form-label">Seleccione la cantidad de nodos</label>
              </div>
              <button type="submit" class="btn btn-outline-success mt-3 mb-3">3 Nodos</button>
          </fieldset>
        </form>
        <form action="./camino4/grafo4.php" method="post">
          <fieldset>
              <button type="submit" class="btn btn-outline-success mt-3 mb-3">4 Nodos</button>
          </fieldset>
        </form>
        <form action="./camino5/grafo5.php" method="post">
          <fieldset>
              <button type="submit" class="btn btn-outline-success mt-3 mb-3">5 Nodos</button>
          </fieldset>
        </form>
    </div>
  </body>
</html>