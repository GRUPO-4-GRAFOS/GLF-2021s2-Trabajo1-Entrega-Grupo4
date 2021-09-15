<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta 
      http-equiv="X-UA-Compatible" 
      content="IE=edge"
    >
    <meta 
      name="viewport" 
      content="width=device-width, initial-scale=1.0"
    >
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" 
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" 
      crossorigin="anonymous"
    >
    <link rel="stylesheet" href="./css/styles.css">
    <title>Trabajo 1</title>
  </head>
  <body>
  <div class="titulo">
          <h1>Ingrese el peso en las aristas que desea agregar (peso maximo 10):</h1>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-sm-6">
          <form action="./matriz3.php" method="post">
            Arista A-B:
            <input 
              type="number" 
              name="A_B" 
              class="form-control" 
              min="0" 
              max="10" 
            />
            Arista B-A:
            <input 
              type="number" 
              name="B_A" 
              class="form-control" 
              min="0" 
              max="10"
            />
            Arista A-C:
            <input 
              type="number" 
              name="A_C" 
              class="form-control" 
              min="0" 
              max="10"
            />
            Arista C-A:
            <input 
              type="number" 
              name="C_A" 
              class="form-control" 
              min="0" 
              max="10"
            />
            Arista B-C:
            <input 
              type="number" 
              name="B_C" 
              class="form-control" 
              min="0" 
              max="10"
            />
            Arista C-B:
            <input 
              type="number" 
              name="C_B" 
              class="form-control" 
              min="0" 
              max="10"
            />
            <input 
              type="submit" 
              value="Enviar" 
              class="btn btn-primary btn-lg my-3"
            />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>