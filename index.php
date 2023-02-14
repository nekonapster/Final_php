<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- import css -->
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!-- import google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Admin base de datos</title>
</head>

<body>

    <form action="crearBD.php" method="POST">
        <span class="material-symbols-outlined">
            looks_one
        </span>
        <label for="nombreBD">Cree la Base de Datos</label>
        </div>
        <br>
        <input type="submit" value="Crear BD">
    </form>
    <br>
    <br>
    <form action="eliminarBD.php" method="POST">
        <span class="material-symbols-outlined">
            looks_two
        </span>
        <label for="eliminarBD">Elimine la Base de Datos</label>
        <br>
        <input type="submit" value="Eliminar BD">
    </form>
    <br>
    <br>
    <form action="crearTablas.php" method="POST">
        <span class="material-symbols-outlined">
            looks_3
        </span>
        <label for="crearTbl">Cree las tablas</label>
        <br>
        <input type="submit" name="crearTbl" value="Crear Tablas">
    </form>
    <br>
    <br>
    <form action="rellenarTablas.php" method="POST">
        <span class="material-symbols-outlined">
            looks_4
        </span>
        <label for="crearTbl">Rellene las tablas</label>
        <br>
        <input type="submit" name="rellenaarTbl" value="Rellenar Tablas">
    </form>
    <br>
    <br>
    <span class="material-symbols-outlined">
        looks_5
    </span>
    <label>Ejecutar programa</label>
    <br>
    <br>
    <a href='programa.php' class="btnPrograma">Ir a Programa</a>
</body>

</html>