<?php
    include("Conectar22.php");
    if(!(session_status() === PHP_SESSION_ACTIVE)){
        $Correo = $_POST["Correo"];
        $Contrase_a = $_POST["Contrase_a"];
        $Consulta = $Conectar -> prepare("SELECT * FROM `Usuarios` WHERE `Correo` LIKE ?");
        $Consulta -> bind_param("s", $Correo);
        $Consulta -> execute();
        $Lista = $Consulta -> get_result();
        $Bien = 0;
        //$Filas = mysqli_num_rows($Conectar -> query($Consulta));
        $Casos_de_prueba = range(1, 25);
        shuffle($Casos_de_prueba);
        while(sizeof($Casos_de_prueba) > 5) array_pop($Casos_de_prueba);
        while($Datos = $Lista -> fetch_array()){
            $Encriptado = $Datos[3];
            //echo "<script>alert('$Filas $Correo $Contrase_a $Encriptado')</script>";
            if(!password_verify($Contrase_a, $Encriptado)){
                //echo "<script>alert('Falló la verificaión.')</script>";
                break;
            }
            $Casos_de_prueba = range(0, 24);
            shuffle($Casos_de_prueba);
            while(sizeof($Casos_de_prueba) > 5) array_pop($Casos_de_prueba);
            session_start();
            $_SESSION["ID"] = $Datos[0];
            $_SESSION["Nombre"] = $Datos[1];
            $_SESSION["Correo"] = $Datos[2];
            $_SESSION["Problemas"] = $Datos[4];
            $_SESSION["Tiempo"] = time();
            $_SESSION["Casitos"] = $Casos_de_prueba;
            $Bien = 1;
            break;
        }
        if($Bien == 1){
            ?>
            <script>
                window.location = "index.php";
            </script>
            <?php
            exit;
        } else {
            ?>
            <script>
                alert("Correo electrónico o contraseña incorrectos.");
                window.location = "Cuentas.php";
            </script>
            <?php
            exit;
        }
    } else {
        ?>
        <script>
            alert("Ya hay una sesión activa.");
            window.location = "index.php";
        </script>
        <?php
        exit;
    }
?>