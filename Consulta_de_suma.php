<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de suma y actualización</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); $Nombre_del_problema = "Consulta_de_suma.php"; /*Nombre.php*/
    $Otrito = "Consulta_de_suma"; /*Nombre de la carpeta*/ $Yo = 9; /*ID del problema*/ ?>
    <div class="Prioridad1">
    <h1>CONSULTA DE SUMA Y ACTUALIZACIÓN</h1>
    Se te dará un número entero n y un arreglo a con n números enteros, luego se te dará un número entero q y 
    q tríos de números t, l y r. Si t es igual a 0, intercambia los valores en las posiciones l y r del arreglo. 
    Si t es igual a 1, halla la suma de los valores del subarreglo a<sub>l</sub>, a<sub>l + 1</sub>, ..., a<sub>r</sub>. 
    Al final imprime la suma de las sumas obtenidas.
    <h3>Límites</h3>
    1 &le; n, q &le; 100000 <br>
    0 &le; l<sub>j</sub> &le; r<sub>j</sub> &le; n - 1 <br>
    -100000 &le; a<sub>i</sub> &le; 100000
    <h3>Ejemplo de entrada</h3>
    4 <br>
    5 6 4 8 <br>
    4 <br>
    0 0 1 <br>
    1 1 3 <br>
    0 2 3 <br>
    1 0 2
    <h3>Ejemplo de salida</h3>
    36
    <h3>Explicación</h3>
    Tras la primera consulta el arreglo se vuelve {6, 5, 4, 8}, la respuesta a la segunda consulta es 17, tras la 
    tercera consulta el arreglo se vuelve {6, 5, 8, 4} y la respuesta a la tercera consulta es 19. Al final la 
    respuesta se obtiene sumando 17 y 19, dando 36.
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
Use un <a href="_rbol_de_segmentos.php">árbol de segmentos</a> o <a href="_rbol_de_Fenwick.php">árbol de Fenwick</a>
para responder a las consultas. No olvide usar long long.
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