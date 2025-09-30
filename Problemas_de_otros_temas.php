<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problemas de otros temas</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw; text-align: center;">
        <h1>PROBLEMAS DE OTROS TEMAS</h1>
        <table border="4">
            <?php
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][15] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='Primos.php'>Primos</a></td></tr>";
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][16] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='Grilla.php'>Grilla</a></td></tr>";
            $Color = "red";
            if(isset($_SESSION["ID"]) and $_SESSION["Problemas"][17] == 1) $Color = "green";
            echo "<tr><td style='text-align: center; background-color: $Color;'><a href='Ra_z.php'>Novena raíz</a></td></tr>";
            ?>
        </table> <br>
        Se recomienda usar <a href="Introducci_n.php#8">freopen</a> para recibir las entradas de 
        los casos de prueba.
    </div>
</body>
</html>