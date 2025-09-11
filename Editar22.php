<?php
    session_start();
    if(!isset($_SESSION["ID"])){
        ?>
        <script>
            alert("No hay una sesión iniciada.");
            window.location("index.php");
        </script>
        <?php
        exit;
    }
    if(time() - $_SESSION["Tiempo"] >= 10800){
        session_unset();
        session_destroy();
        ?>
        <script>
            alert("Su sesión expiró, por favor vuelva a iniciar sesión.");
            window.location("index.php");
        </script>
        <?php
        exit;
    }
    include("Conectar22.php");
    $Identificador = $_SESSION["ID"];
    $Consulta = $Conectar -> prepare("SELECT * FROM Usuarios WHERE ID = ?");
    $Consulta -> bind_param("i", $Identificador);
    $Consulta -> execute();
    $Resultado = $Consulta -> get_result();
    $Bien = 0;
    while($Fila = $Resultado -> fetch_array()){
        $Encriptado = $Fila[3];
        $Bien = 1;
        break;
    }
    if($Bien == 0){
        ?>
        <script>
            alert("Ocurrió un problema. Por favor vuelva a iniciar sesión.");
            session_unset();
            session_destroy();
            window.location = "Cuentas.php";
        </script>
        <?php
        exit;
    }
    if(!password_verify($_POST["Antigua_contrase_a"], $Encriptado)){
        ?>
        <script>
            alert("La contraseña es incorrecta.");
            window.location = "index.php";
        </script>
        <?php
        exit;
    }
    if($_POST["Contrase_a"] != $_POST["Contrase_a2"]){
        ?>
        <script>
            alert("Las contraseñas no coinciden.");
            window.location = "index.php";
        </script>
        <?php
        exit;
    }
    $Nombre_nuevo = $_POST["Nombre"];
    $Contrase_a_nueva = password_hash($_POST["Contrase_a"], PASSWORD_DEFAULT);
    $Correo_nuevo = $_POST["Correo"];
    $Consulta = $Conectar -> prepare("SELECT * FROM Usuarios WHERE Correo LIKE ?");
    $Consulta -> bind_param("s", $Correo_nuevo);
    $Consulta -> execute();
    $Resultado = $Consulta -> get_result();
    $Bien = 1;
    while($Fila = $Resultado -> fetch_array()){
        $Bien = 0;
        break;
    }
    if($Bien == 0){
        ?>
        <script>
            alert("El correo ya está en uso.");
            window.location = "index.php";
        </script>
        <?php
        exit;
    }
    $Consulta = $Conectar -> prepare("UPDATE Usuarios SET Nombre = ?, Contrase_a = ?, Correo = ? WHERE ID = ?");
    $Consulta -> bind_param("sssi", $Nombre_nuevo, $Contrase_a_nueva, $Correo_nuevo, $Identificador);
    $Consulta -> execute();
    $_SESSION["Nombre"] = $Nombre_nuevo;
    $_SESSION["Correo"] = $Correo_nuevo;
    $_SESSION["Tiempo"] = time();
    ?>
    <script>
        alert("Se modificaron los datos correctamente.");
        window.location = "index.php";
    </script>
    <?php
?>