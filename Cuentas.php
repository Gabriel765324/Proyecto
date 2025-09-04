<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuentas</title>
    <link rel="stylesheet" href="Estilo/Cuentas.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div class="Recuadro"></div>
    <div class="Preguntar_por_la_cuenta">¿No tiene una cuenta?</div>
    <a href="Crear_cuenta.php" class="Enlace_para_el_registro">Regístrese.</a>
    <form action="Iniciar_sesi_n22.php" method="post">
        <div class="Ingresar_correo">Ingrese su correo electrónico</div>
        <input type="email" name="Correo" id="" required class="Poner_aqu__el_correo" maxlenght="255">
        <div class="Ingresar_contrase_a">Ingrese su contraseña</div>
        <input type="password" name="Contrase_a" id="" required class="Poner_aqu__la_contrase_a" maxlenght="20">
        <input type="submit" value="Iniciar sesión" class="Iniciar_sesi_n">
    </form>
</body>
</html>