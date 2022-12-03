<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docentes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5 bg-light">
        <h2 class="text-center">Docentes</h2>
        <br>
        <button class="btn btn-success mb-3">
            <a href="http://localhost/TallerMCC/index.php?c=Docente&a=nuevo" class="text-white font-weight-bold">Agregar</a>
        </button>
        <br>

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Ciudad</th>
                    <th>Telefono</th>
                    <th>Codigo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data["docentes"] as $dato) {
                    echo "<tr>";
                    echo "<td>" . $dato["nombre"] . "</td>";
                    echo "<td>" . $dato["ciudad"] . "</td>";
                    echo "<td>" . $dato["telefono"] . "</td>";
                    echo "<td>" . $dato["codigo"] . "</td>";
                    echo "<td><button class='btn-secondary'><a href='index.php?c=Docente&a=modificar&id=" . $dato["id"] . "' class='text-white'>Modificar</a></button></td>";
                    echo "<td><button class='btn-danger'><a href='index.php?c=Docente&a=eliminar&id=" . $dato["id"] . "' class='text-light'>Eliminar</a></button></td>";
                    echo "<tr>";
                }
                ?>
            </tbody>
        </table>


        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha de nacimiento</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data["docentesII"] as $dato) {
                    echo "<tr>";
                    echo "<td>" . $dato["codigo"] . "</td>";
                    echo "<td>" . $dato["nombre"] . "</td>";
                    echo "<td>" . $dato["apellido"] . "</td>";
                    echo "<td>" . $dato["fechaNacimiento"] . "</td>";
                    echo "<td>" . $dato["correo"] . "</td>";
                    echo "<tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>