<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="Estilo/Cursos.css">
</head>
<body>
    <?php
        session_start();
        $_SESSION["P_gina"] = 1;
        session_write_close();
        include("Plantilla.php");
        include("Conectar22.php");
    ?>
    <div class="Tabla">
        <div class="Fila">
            <a href="Introducci_n.php"><div class="Celda1">Introducción a C++</div></a>
            <a href="Arreglos.php"><div class="Celda2">Arreglos</div></a>
            <a href="Grafos.php"><div class="Celda3">Grafos</div></a>
            <a href="Otros.php"><div class="Celda4">Otros conceptos</div></a>
        </div>
    </div>
</body>
</html>