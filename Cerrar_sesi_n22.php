<?php
    session_start();
    if(isset($_SESSION["ID"])){
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit;
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