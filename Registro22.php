<?php
    include("Conectar22.php");
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
    $Consulta = "SELECT * FROM `Usuarios` WHERE `Correo` LIKE '$Correo'";
    $Lista = $Conectar -> query($Consulta);
    $Bien = 1;
    while($Datos = $Lista -> fetch_array()){
        $Bien = 0;
        break;
    }
    if($Bien == 1){
        $Progreso = str_repeat("0", 222);
        $Contrase_a = password_hash($Contrase_a, PASSWORD_DEFAULT);
        $Consulta = "INSERT INTO `Usuarios` (`Nombre`, `Correo`, `Contrase_a`, `Problemas`) VALUES ('$Nombre', '$Correo', '$Contrase_a', '$Progreso')";
        $Conectar -> query($Consulta);
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