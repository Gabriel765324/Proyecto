<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma máxima en cada prefijo</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php session_start();
        $_SESSION["P_gina"] = 3;
        session_write_close(); include("Plantilla.php"); $Nombre_del_problema = "Suma_mayor.php"; /*Nombre.php*/
    $Otrito = "Suma_mayor"; /*Nombre de la carpeta*/ $Yo = 5; /*ID del problema*/ ?>
    <div class="Prioridad1">
    <h1>SUMA MÁXIMA EN CADA PREFIJO</h1>
    Se te da un número entero n y un arreglo a de n elementos. Para cada i tal que 1 &le; i &le; n
    considera el subarreglo b de a de sus primeros i elementos, para cada b tienes que encontrar la suma máxima
    de algún subarreglo (posiblemente vacío) de b y al final debes imprimir la suma de los valores obtenidos.
    <h3>Límites</h3>
    1 &le; n &le; 1000000 <br>
    -100000 &le; a<sub>i</sub> &le; 100000
    <h3>Ejemplo de entrada</h3>
    4 <br>
    -7 5 8 -8
    <h3>Ejemplo de salida</h3>
    31
    <h3>Explicación</h3>
    Los subarreglos b son {-7}, {-7, 5}, {-7, 5, 8} y {-7, 5, 8, -8}. El la suma de elementos del subarreglo con la suma máxima de {-7}
    es 0 porque es mejor tomar el subarreglo vacío, para {-7, 5} la respuesta es 5, para {-7, 5, 8} la respuesta es 13
    y para {-7, 5, 8, -8} la respuesta es 13. Sumando las respuestas se obtiene 31.
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
Use el <a href="Algoritmo_de_Kadane.php">algoritmo de Kadane</a> y sume a la respuesta 
la suma máxima que tenga en cada posición del arreglo. No olvide usar long long.
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