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
        <?php
            session_start();
            $Cero = "Inicio";
            $Uno = "Cursos";
            $Dos = "Perfil";
            $Tres = "Problemas";
            $Cuatro = "Cuentas";
            if(isset($_SESSION["P_gina"])){
                if($_SESSION["P_gina"] == 0) $Cero = "Inicio1";
                if($_SESSION["P_gina"] == 1) $Uno = "Cursos1";
                if($_SESSION["P_gina"] == 2) $Dos = "Perfil1";
                if($_SESSION["P_gina"] == 3) $Tres = "Problemas1";
                if($_SESSION["P_gina"] == 4) $Cuatro = "Cuentas1";
            }
            session_write_close();
        ?>
        <a href="index.php"><button class="<?php echo $Cero; ?>">Inicio</button></a>
        <a href="Cursos.php"><button class="<?php echo $Uno; ?>">Cursos</button></a>
        <a href="Problemas.php"><button class="<?php echo $Tres; ?>">Problemas</button></a>
        <?php
            session_start();
            if(!isset($_SESSION["ID"])){
                echo "<a href='Cuentas.php'><button class='$Cuatro'>Iniciar sesión<br>Registrarse</button></a>";
            } else {
                if(time() - $_SESSION["Tiempo"] >= 10800){
                    session_unset();
                    session_destroy();
                    echo "<a href='Cuentas.php'><button class='$Cuatro'>Iniciar sesión<br>Registrarse</button></a>";
                } else {
                    echo "<a href='Cerrar_sesi_n22.php'><button class='$Cuatro'>Cerrar sesión</button></a>";
                    echo "<a href='Perfil.php'><button class='$Dos'>Perfil</button></a>";
                    $_SESSION["Tiempo"] = time();
                }
            }
        ?>
    </center>
</body>
</html>