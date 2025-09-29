<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problemas de grafos</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
        <h1>PROBLEMAS DE GRAFOS</h1>
        <table border="4">
            <?php
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][10] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='_rbol_generador_m_ximo.php'>Árbol generador máximo</a></td></tr>";
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][11] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='Componentes_conexos.php'>Componentes conexos</a></td></tr>";
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][12] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='Di_metro.php'>Diámetro (árbol)</a></td></tr>";
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][13] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='Di_metro2.php'>Diámetro (grafo)</a></td></tr>";
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][14] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='Remover.php'>Remover</a></td></tr>";
            ?>
        </table>
    </div>
</body>
</html>