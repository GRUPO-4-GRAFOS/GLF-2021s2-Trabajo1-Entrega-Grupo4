<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <title>Trabajo 1</title>
</head>

<body>
    <div class="container">

        <h1 class="text-center mt-3 mb-3">Trabajo Grafos N°1</h1>
        <div class="row">
            <div class="col-8">
                <!--Linea Ciudad-->
                <div class="row">
                    <div class="col casa">
                        casa
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col casa">
                        casa
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col casa">
                        casa
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col casa">
                        casa
                    </div>
                </div>
                <!--Linea Calles-->
                <div class="row">
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col cruce">
                        cruce
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col cruce">
                        cruce
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col cruce">
                        cruce
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                </div>
                <!--Linea Ciudad-->
                <div class="row">
                    <div class="col casa">
                        casa
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col parque">
                        parque
                    </div>
                    <div class="col parque">
                        parque
                    </div>
                    <div class="col parque">
                        parque
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col casa">
                        casa
                    </div>
                </div>
                <!--Linea Calles-->
                <div class="row">
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col cruce">
                        cruce
                    </div>
                    <div class="col parque">
                        parque
                    </div>
                    <div class="col parque">
                        parque
                    </div>
                    <div class="col parque">
                        parque
                    </div>
                    <div class="col cruce">
                        cruce
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                </div>
                <!--Linea Ciudad-->
                <div class="row">
                    <div class="col casa">
                        casa
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col casa">
                        casa
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col casa">
                        casa
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col casa">
                        casa
                    </div>
                </div>
                <div class="row">
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col cruce">
                        cruce
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col cruce">
                        cruce
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col cruce">
                        cruce
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                </div>
                <!--Linea Calles-->
                <div class="row">
                    <div class="col casa">
                        casa
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col casa">
                        casa
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col casa">
                        casa
                    </div>
                    <div class="col calle">
                        calle
                    </div>
                    <div class="col casa">
                        casa
                    </div>
                </div>
            </div>
            <!--Inicio Formulario-->
            <div class="col-4">
                <form class="mb-3">
                    <fieldset>
                        <legend>Crear Ciudad</legend>
                        <label class="form-label">Elija tamñao ciudad</label>
                        <input type="number" class="form-control"></input>
                        <button type="submit" class="btn btn-outline-success mt-3 mb-3">Crear Cidudad</button>
                    </fieldset>
                </form>
                <form>
                    <fieldset>
                        <legend>Crear Grafo</legend>
                        <label class="form-label">Elija el tipo de grafo</label>
                        <select class="form-select">
                            <option>Grafo 1</option>
                            <option>Grafo 1</option>
                            <option>Grafo 1</option>
                            <option>Grafo 1</option>
                            <option>Grafo 1</option>
                            <option>Grafo 1</option>
                            <option>Grafo 1</option>
                        </select>
                        <label class="form-label">Ingrese el nombre del Grafo</label>
                        <input type="text" class="form-control" placeholder="Ej: A, B...."></input>
                    </fieldset>
                    <button type="submit" class="btn btn-outline-success mt-3 mb-3">Crear Grafo</button>
                </form>
                <ul class="list-group">
                    <li class="list-group-item ">parque</li>
                    <li class="list-group-item ">calle</li>
                    <li class="list-group-item ">cruce</li>
                    <li class="list-group-item ">casa</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>