<?php
/**
 * Un simple archivo que configura el log, oculta
 * los errores y crea un nuevo archivo cada día
 *
 */
# El directorio o carpeta en donde se van a crear los logs
# da algo como C:\xampp\esta_carpeta\logs
define("RUTA_LOGS", __DIR__ . "/logs");
# Crear carpeta si no existe
if (!file_exists(RUTA_LOGS)) {
    mkdir(RUTA_LOGS);
}
# Poner fecha y hora de México, esto es por si el servidor tiene
# otra zona horaria
date_default_timezone_set("America/Santiago");

# Configuramos el ini para que...
# No muestre errores
ini_set('display_errors', 0);
# Los ponga en un archivo
ini_set("log_errors", 1);
# Y le indicamos en dónde los va a poner, sería en algo como:
# RUTA_LOGS/2019-02-07.log
# Así cada día tenemos un archivo de log distinto
ini_set("error_log", RUTA_LOGS . "/" . date("d-m-y h:i:s") . "log.log");
# Listo, ahora asegúrate de incluir lo de arriba en el encabezado o un archivo
# común que se ejecute siempre al inicio
?>

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
            <form action ="./back.php"method ="post" >
        
        Nodo inicial: <input type ="number" name ="nodoinicial" class="form-control" min="0" max="7" />
        Nodo final :<input type ="number" name ="nodofinal" class="form-control" min="0" max="7"/>

        <input type ="submit" value = "dame click!" class= "btn btn-outline-success mt-3 mb-3"/>
                </form>
                <form action ="./arbol.php"method ="post" >
        
        Ver Arbol Prim --->
    

         <input type ="submit" value = "dame click!" class= "btn btn-outline-success mt-3 mb-3"/>
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
                    <li class="list-group-item blueviolet">Simbologia: </li>
                    <li class="list-group-item green ">parque</li>
                    <li class="list-group-item grey">calle</li>
                    <li class="list-group-item red">cruce</li>
                    <li class="list-group-item white">casa</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
