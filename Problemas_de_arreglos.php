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
        <table border="4">
            <?php
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][5] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='Suma_mayor.php'>Suma máxima en cada prefijo</a></td></tr>";
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][6] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='Producto.php'>Consultas de productos</a></td></tr>";
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][7] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='M_ximo.php'>Máximo en un rango y medio máximo</a></td></tr>";
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][8] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='M_nimo.php'>Mínimo en un rango y asignación</a></td></tr>";
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][9] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='Consulta_de_suma.php'>Consulta de suma y actualización</a></td></tr>";
            ?>
        </table>
    </div>
</body>
</html>