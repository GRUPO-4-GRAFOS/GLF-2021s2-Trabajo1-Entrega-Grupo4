<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Trabajo 1</title>
  </head>
  <body>
    <div class="col-4">
      <div style="text-align: center;">
        <form action="./grafo.php" method="post">
          <fieldset>
            <legend>Crear Grafo</legend>
              <label class="form-label">Ingrese cantidad de nodos</label>
              <input type="number" name="cantnodo" class="form-control" min="1" max="10" require /></input>
              <label class="form-label">Elija el tipo de grafo</label>
              <select class="form-select" name="tipografo">
                <option>simple</option>
                <option>dirigido</option>
                <option>etiquetado</option>
              </select>
              <button type="submit" class="btn btn-outline-success mt-3 mb-3">Crear Grafo</button>
          </fieldset>
        </form>
      </div>
    </div>
  </body>
</html>