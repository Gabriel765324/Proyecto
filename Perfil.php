<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="Estilo/Perfil.css">
</head>
<body>
    <?php 
        include("Plantilla.php");
        if(!isset($_SESSION["ID"])){
            ?>
            <script>
                alert("No hay una sesión activa.");
                window.location = "index.php";
            </script>
            <?php
            exit;
        }
    ?>
    <div class="Caja1"></div>
    <div class="Datos">Datos</div>
    <div class="Dato_nombre">Nombre: <?php echo $_SESSION["Nombre"]; ?></div>
    <div class="Dato_correo">Correo electrónico: <?php
        $Probemos_con_esto = 64;
        if(strlen($_SESSION["Correo"]) <= $Probemos_con_esto){
            echo $_SESSION["Correo"];
        } else {
            echo substr($_SESSION["Correo"], 0, $Probemos_con_esto - 3)."...";
        }
    ?></div>
    <div class="Caja2"></div>
    <div class="Modificar_datos">Modificar datos</div>
    <form action="Editar22.php" method="post">
        <div class="Nombre">Nuevo nombre</div>
        <input type="text" name="Nombre" required class="Dar_nombre" maxlength="20" autocomplete="off">
        <div class="Correo">Nuevo correo</div>
        <input type="email" name="Correo" required class="Dar_correo" maxlength="255" autocomplete="off">
        <div class="Contrase_a">Nueva contraseña</div>
        <input type="password" name="Contrase_a" required class="Dar_contrase_a" maxlength="20" autocomplete="off">
        <div class="Contrase_a2">Confirme su contraseña</div>
        <input type="password" name="Contrase_a2" required class="Dar_contrase_a2" maxlength="20" autocomplete="off">
        <div class="Antigua_contrase_a">Antigua contraseña</div>
        <input type="password" name="Antigua_contrase_a" required class="Dar_antigua_contrase_a" maxlength="20" autocomplete="off">
        <input type="submit" value="Guardar cambios" class="Enviar">
    </form>
</body>
</html>