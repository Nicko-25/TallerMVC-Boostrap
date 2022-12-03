<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar docente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <form id="nuevo" name="nuevo" method="POST" autocomplete="off" action="index.php?c=Docente&a=guarda">
            <fieldset class="col-5 d-flex flex-column border p-3 m-4">
                <p class="text-center h3 ">Registrar Docente</p>

                Nombre: <input type="text" id="nombre" name="nombre"> <br>
                Ciudad: <input type="text" id="ciudad" name="ciudad"> <br>
                teléfono: <input type="number" id="telefono" name="telefono"> <br>
                Código: <input type="text" id="codigo" name="codigo"> <br>
                <button id="guardar" name="guardar" type="submit" class="btn btn-success mt-2">Guardar</button>
                <a href="index.php" class="btn btn-danger my-1">Cancelar</a>
            </fieldset>
        </form>
    </div>

</body>

</html>