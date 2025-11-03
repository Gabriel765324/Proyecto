<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problemas</title>
    <link rel="stylesheet" href="Estilo/Problemas.css">
</head>
<body>
    <?php session_start();
        $_SESSION["P_gina"] = 3;
        session_write_close(); include("Plantilla.php"); ?>
    <div class="Tabla">
        <div class="Fila">
            <a href="Problemas_de_introducci_n.php"><div class="Celda1">Problemas introductorios</div></a>
            <a href="Problemas_de_arreglos.php"><div class="Celda2">Problemas de arreglos</div></a>
            <a href="Problemas_de_grafos.php"><div class="Celda3">Problemas de grafos</div></a>
            <a href="Problemas_de_otros_temas.php"><div class="Celda4">Otros problemas</div></a>
        </div>
    </div>
    <a href="Clasificaci_n.php"><button class="Clasificaci_n">Clasificación</button></a>
</body>
</html>