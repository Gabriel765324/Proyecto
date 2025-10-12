<?php
    include("Conectar22.php");
    session_start();
    if(!isset($_SESSION["ID"])){
        ?>
        <script>
            alert("No hay una sesión iniciada.");
            window.location = "index.php";
        </script>
        <?php
        exit;
    }
    if(!isset($_POST["Contrase_a"])){
        ?>
        <script>
            alert("Ocurrió un error.");
            window.location = "index.php";
        </script>
        <?php
        exit;
    }
    $ID = $_SESSION["ID"];
    $Consulta = $Conectar -> query("SELECT * FROM `Usuarios` WHERE `ID` = $ID");
    //echo "<script>alert('$ID')</script>";
    if($Consulta -> num_rows != 1){
        ?>
        <script>
            alert("Ocurrió un error.");
            window.location = "index.php";
        </script>
        <?php
        exit;
    }
    while($Veamos = $Consulta -> fetch_array()){
        if(!password_verify($_POST["Contrase_a"], $Veamos[3])){
            ?>
            <script>
                alert("Contraseña incorrecta.");
                window.location = "index.php";
            </script>
            <?php
            exit;
        }
    }
    $Consulta = $Conectar -> prepare("DELETE FROM `Usuarios` WHERE `ID` = $ID");
    $Consulta -> execute();
    session_unset();
    session_destroy();
    ?>
        <script>
            alert("Se borró la cuenta exitosamente.");
            window.location = "index.php";
        </script>
    <?php
    exit;
?>