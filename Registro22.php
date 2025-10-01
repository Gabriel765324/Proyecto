<?php
    include("Conectar22.php");
    if(!isset($_POST["Correo"])){
        ?>
        <script>
            alert("No se llenó el formulario.");
            window.location = "index.php";
        </script>
        <?php
    }
    $Nombre = $_POST["Nombre"];
    $Correo = $_POST["Correo"];
    $Contrase_a = $_POST["Contrase_a"];
    $Contrase_a2 = $_POST["Contrase_a2"];
    if($Contrase_a != $Contrase_a2){
        ?>
        <script>
            alert("Las contraseñas no coinciden.");
            window.location = "Crear_cuenta.php";
        </script>
        <?php
        exit;
    }
    $Consulta = $Conectar -> prepare("SELECT * FROM `Usuarios` WHERE `Correo` LIKE ?");
    $Consulta -> bind_param("s", $Correo);
    $Consulta -> execute();
    $Lista = $Consulta -> get_result();
    $Bien = 1;
    while($Datos = $Lista -> fetch_array()){
        $Bien = 0;
        break;
    }
    if($Bien == 1){
        $Progreso = str_repeat("0", 64);
        $Contrase_a = password_hash($Contrase_a, PASSWORD_DEFAULT);
        $Consulta = $Conectar -> prepare("INSERT INTO `Usuarios` (`Nombre`, `Correo`, `Contrase_a`, `Problemas`, `Problemas_resueltos`) VALUES (?, ?, ?, ?, 0)");
        $Consulta -> bind_param("ssss", $Nombre, $Correo, $Contrase_a, $Progreso);
        $Consulta -> execute();
        ?>
        <script>
            alert("Se creó la cuenta.");
            window.location = "Cuentas.php";
        </script>
        <?php
        exit;
    } else {
        ?>
        <script>
            alert("Ya hay una cuenta con ese correo electrónico.");
            window.location = "Crear_cuenta.php";
        </script>
        <?php
        exit;
    }
?>