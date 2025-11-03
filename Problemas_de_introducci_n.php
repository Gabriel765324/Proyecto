<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problemas introductorios</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php session_start();
        $_SESSION["P_gina"] = 3;
        session_write_close(); include("Plantilla.php"); ?>
    <div class="Prioridad1">
        <h1>PROBLEMAS INTRODUCTORIOS</h1>
        <table border="4">
            <?php
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][0] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='A_B.php'>A + B</a></td></tr>";
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][1] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='Contar.php'>Contar</a></td></tr>";
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][2] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='Diferentes.php'>Diferentes</a></td></tr>";
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][3] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='Ordenar.php'>Ordenar</a></td></tr>";
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][4] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='Presente.php'>¿Está presente?</a></td></tr>";
            ?>
        </table> <br>
        En los problemas se te darán 3 casos de prueba que debes descargar. Una vez hecho eso, 
        tienes que crear un código que pueda resolver el problema planteado para cada caso. 
        Se recomienda usar <a href="Introducci_n.php#8">freopen</a> para leer las entradas de 
        los casos de prueba.
    </div>
</body>
</html>