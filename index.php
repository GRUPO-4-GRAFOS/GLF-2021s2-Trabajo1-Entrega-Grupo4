
<!DOCTYPE html>
<html lang="es" xml:lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;400&display=swap" rel="stylesheet">
    <p style="background:#FF813E; color:white; font-weight:bold; padding:15px; border:3px solid #B34F19; margin-top:40px; margin-bottom:40px; text-align:center; font-size:40px; border-radius:10px;">Trabajo 1: Grafos</p>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css">
    
</head>

<body>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
  
</head>


  
            <div class="col-4">
            <div style="text-align: center;">

                <form action ="./grafo.php"method ="post" >
                    <fieldset>
                        <legend>Crear Grafo</legend>

                        <label class="form-label">Ingrese cantidad de nodos</label>
                        <input type="number" name ="cantnodo" class="form-control" min="1" max="10" /></input>
                        <label class="form-label">Elija el tipo de grafo</label>
                        <select class="form-select" name="tipografo">
                            <option>simple</option>
                            <option>dirigido</option>
                            <option>etiquetado</option>
                        </select>
                        <!-- <label class="form-label">Ingrese el nombre del Grafo</label>
                        <input type="text" class="form-control" placeholder="Ej: A, B...."></input>-->
                    </fieldset>
                    <button type="submit" class="btn btn-outline-success mt-3 mb-3">Crear Grafo</button>
                </form>
              
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
