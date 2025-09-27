<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuentas</title>
    <link rel="stylesheet" href="Estilo/Crear_cuenta.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div class="Recuadro"></div>
    <form action="Registro22.php" method="post">
        <div class="Texto_de_nombre_creado">Ingrese su nombre de usuario</div>
        <input type="text" name="Nombre" id="" required class="Espacio_para_poner_el_nombre_creado" maxlength="20" autocomplete="off">
        <div class="Texto_de_correo_creado">Ingrese su correo electrónico</div>
        <input type="email" name="Correo" id="" required class="Espacio_para_poner_el_correo_creado" maxlength="255" autocomplete="off">
        <div class="Texto_de_contrase_a_creada">Ingrese su contraseña</div>
        <input type="password" name="Contrase_a" id="" required class="Espacio_para_poner_la_contrase_a_creada" maxlength="20" autocomplete="off">
        <div class="Texto_de_contrase_a_creada2">Confirme su contraseña</div>
        <input type="password" name="Contrase_a2" id="" required class="Espacio_para_poner_la_contrase_a_creada2" maxlength="20" autocomplete="off">
        <input type="submit" value="Crear cuenta" class="Bot_n_para_crear_cuenta">
    </form>
    <div class="Preguntar_por_la_cuenta">¿Ya tiene una cuenta?</div>
    <a href="Cuentas.php" class="Enlace_de_inicio_de_sesi_n">Iniciar sesión.</a>
</body>
</html>