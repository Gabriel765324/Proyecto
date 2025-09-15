<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuentas</title>
    <link rel="stylesheet" href="Estilo/Plantilla.css">
</head>
<body>
    <?php include("Conectar22.php"); ?>
    <div class="Fondo"></div>
    <div class="Barra_superior"></div>
    <center>
        <a href="index.php"><button class="Inicio">Inicio</button></a>
        <a href="Cursos.php"><button class="Cursos">Cursos</button></a>
        <a href="Problemas.php"><button class="Problemas">Problemas</button></a>
        <?php
            session_start();
            if(!isset($_SESSION["ID"])){
                echo "<a href='Cuentas.php'><button class='Cuentas'>Iniciar sesión<br>Registrarse</button></a>";
            } else {
                if(time() - $_SESSION["Tiempo"] >= 10800){
                    session_unset();
                    session_destroy();
                    echo "<a href='Cuentas.php'><button class='Cuentas'>Iniciar sesión<br>Registrarse</button></a>";
                } else {
                    echo "<a href='Cerrar_sesi_n22.php'><button class='Cuentas'>Cerrar sesión</button></a>";
                    echo "<a href='Perfil.php'><button class='Perfil'>Perfil</button></a>";
                    $_SESSION["Tiempo"] = time();
                }
            }
        ?>
    </center>
</body>
</html>