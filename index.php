<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compite con C++</title>
    <link rel="stylesheet" href="Estilo/index.css">
</head>
<body>
    <?php 
        include("Plantilla.php");
        if(isset($_SESSION["ID"])){
            $Nombrecillo = $_SESSION["Nombre"];
            echo "<div class='Bienvenida'>¡Bienvenido/a $Nombrecillo!</div>";
        } else {
            echo "<div class='Bienvenida'>¡Bienvenido/a a Compite con C++!</div>";
        }
        echo "<div class='Lo_que_se_hace'>Aquí aprenderás a usar C++ y a implementar algoritmos y estructuras de datos que se usan en programación competitiva.</div>";
    ?>
</body>
</html>