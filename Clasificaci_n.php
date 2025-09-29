<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificación</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php
    include("Plantilla.php");
    $Puestos = $Conectar -> query("SELECT Nombre, Problemas_resueltos, ID FROM Usuarios ORDER BY Problemas_resueltos DESC");
    $Puesto = 1;
    $Estamos = 1;
    ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw; text-align: center;">
        <table border="2">
            <tr><th>Puesto</th><th>Nombre</th><th>Problemas resueltos</th></tr>
            <?php
            $Primero = 1;
            $Anterior = 22;
            while($Tabla = $Puestos -> fetch_array()){
                if($Primero == 1) $Primero = 0;
                else if($Tabla[1] != $Anterior) $Puesto = $Estamos;
                $Anterior = $Tabla[1];
                $Estamos++;
                $Nombrecillo = $Tabla[0];
                $Problemitas = $Tabla[1];
                if(isset($_SESSION["ID"])){
                    if($Tabla[2] != $_SESSION["ID"]) echo "<tr style='background-color: rgb(83, 224, 174)'><td>$Puesto</td><td>$Nombrecillo</td><td>$Problemitas</td></tr>";
                    else echo "<tr style='background-color: cyan'><td>$Puesto</td><td>$Nombrecillo</td><td>$Problemitas</td></tr>";
                } else echo "<tr style='background-color: rgb(83, 224, 174)'><td>$Puesto</td><td>$Nombrecillo</td><td>$Problemitas</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>