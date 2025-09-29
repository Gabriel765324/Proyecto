<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problemas introductorios</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
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
        </table>
    </div>
</body>
</html>