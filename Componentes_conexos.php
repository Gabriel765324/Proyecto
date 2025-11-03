<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Componentes conexos</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php
        session_start();
        $_SESSION["P_gina"] = 3;
        session_write_close();
        include("Plantilla.php"); $Nombre_del_problema = "Componentes_conexos.php"; /*Nombre.php*/
        $Otrito = "Componentes_conexos"; /*Nombre de la carpeta*/ $Yo = 11; /*ID del problema*/
    ?>
    <div class="Prioridad1">
    <h1>COMPONENTES CONEXOS</h1>
    Se te dará una grilla con n filas y n columnas, luego se te darán n filas con n números cada una en 
    donde 0 representa que la casilla está vacía y 1 significa que está llena. Dos casillas forman parte 
    del mismo componente conexo si ambas casillas están vacías y se puede viajar de una casilla
    a la otra solo moviéndose a través de casillas vacías adyacentes sin movimientos en diagonal.
    Tu tarea es contar la cantidad 
    de componentes conexos en la grilla. Ten en cuenta que una grilla que no tiene casillas vacías 
    tiene 0 componentes conexos.
    <h3>Límites</h3>
    1 &le; n &le; 2000
    <h3>Ejemplo de entrada</h3>
    5 <br>
    1 0 0 1 1 <br>
    0 1 1 1 0 <br>
    0 0 0 0 1 <br>
    1 1 1 1 0 <br>
    0 1 1 1 1
    <h3>Ejemplo de salida</h3>
    5
    <h3>Explicación</h3>
    Hay 5 componentes conexos en la grilla.
    <br>
    <?php
        if(!isset($_SESSION["Temporizador"]) and isset($_SESSION["ID"])){
            $_SESSION["Temporizador"] = time();
            $_SESSION["Este_problema"] = $Yo;
        } else if(isset($_SESSION["Este_problema"])){
            if($_SESSION["Este_problema"] != $Yo){
                $_SESSION["Temporizador"] = time();
                $_SESSION["Este_problema"] = $Yo;
            } else {
                if(time() - 1200 >= $_SESSION["Temporizador"]){
                    ?>
                    <button id="Mostrador" onclick="Mostrar()">Ver solución</button>
                    <div id="Soluci_n">
                        <h3>Solución</h3>
Recorra la grilla y use una <a href="B_squedas.php">búsqueda</a> en cada casilla 
vacía no visitada y la respuesta será la cantidad de búsquedas en anchura hechas.
                        <br>
                    </div>
                    <script>
                        function Mostrar(){
                        document.getElementById("Mostrador").style.display = "none";   // Ocultar botón
                        document.getElementById("Soluci_n").style.display = "block"; // Mostrar texto
                        }
                    </script>
                    <?php
                }
            }
        }
        if(isset($_SESSION["ID"])){
    ?>
    <form class="Formulario" action="Comprobar22.php?Este_de_aqu_=<?php echo $Yo; ?>&Antes=<?php echo $Nombre_del_problema; ?>" method="post">
        <button onclick="d0()" class="Descarga">Descargar caso 0</button><input type="text" name="r0" required maxlength="20" autocomplete="off" placeholder="Respuesta" class="Caja_de_respuesta"><br>
        <button onclick="d1()" class="Descarga">Descargar caso 1</button><input type="text" name="r1" required maxlength="20" autocomplete="off" placeholder="Respuesta" class="Caja_de_respuesta"><br>
        <button onclick="d2()" class="Descarga">Descargar caso 2</button><input type="text" name="r2" required maxlength="20" autocomplete="off" placeholder="Respuesta" class="Caja_de_respuesta"><br>
        <input type="submit" value="Verificar" class="Responder"><input type="reset" value="Borrar" class="Borrar">
    </form>
    <script>
    function d0(){
        const enlace = document.createElement('a');
        enlace.href = 'Casos/<?php echo $Otrito; ?>/Caso<?php echo $_SESSION["Casitos"][0]; ?>.txt';
        enlace.download = 'Caso0.txt';
        enlace.style.display = 'none';
        document.body.appendChild(enlace);
        enlace.click();
        document.body.removeChild(enlace);
    }
    function d1(){
        const enlace = document.createElement('a');
        enlace.href = 'Casos/<?php echo $Otrito; ?>/Caso<?php echo $_SESSION["Casitos"][1]; ?>.txt';
        enlace.download = 'Caso1.txt';
        enlace.style.display = 'none';
        document.body.appendChild(enlace);
        enlace.click();
        document.body.removeChild(enlace);
    }
    function d2(){
        const enlace = document.createElement('a');
        enlace.href = 'Casos/<?php echo $Otrito; ?>/Caso<?php echo $_SESSION["Casitos"][2]; ?>.txt';
        enlace.download = 'Caso2.txt';
        enlace.style.display = 'none';
        document.body.appendChild(enlace);
        enlace.click();
        document.body.removeChild(enlace);
    }
    </script>
    <?php } else echo "Por favor inicie sesión para poder enviar soluciones.";?>
    </div>
</body>
</html>