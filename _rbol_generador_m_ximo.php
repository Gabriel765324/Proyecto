<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Árbol generador máximo</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); $Nombre_del_problema = "_rbol_generador_m_ximo.php"; /*Nombre.php*/
    $Otrito = "_rbol_generador_m_ximo"; /*Nombre de la carpeta*/ $Yo = 10; /*ID del problema*/ ?>
    <div class="Prioridad1">
    <h1>ÁRBOL GENERADOR MÁXIMO</h1>
    Se te dará un grafo ponderado no dirigido conexo y tu tarea será determinar la suma de pesos
    de todas las aristas que forman su árbol 
    generador máximo (el grafo que se forma al tomar la mínima cantidad de aristas para que 
    sea conexo maximizando la suma de los pesos de esas aristas). Se te dará un número entero n que representará la cantidad de nodos del grafo y 
    un número entero m que representará el número de aristas del grafo, a continuación se te darán 
    m tríos de números a, b, p que representarán que hay una arista con peso p que une los nodos a y b.
    <h3>Límites</h3>
    1 &le; n &le; 400000 <br>
    n - 1 &le; m &le; 400000 <br>
    0 &le; a<sub>i</sub>, b<sub>i</sub> &le; n - 1 <br>
    a<sub>i</sub> &ne; b<sub>i</sub> <br>
    -1000000000 &le; p<sub>i</sub> &le; 1000000000
    <h3>Ejemplo de entrada</h3>
    4 5 <br>
    0 3 5 <br>
    1 0 7 <br>
    3 2 0 <br>
    2 0 3 <br>
    1 3 8
    <h3>Ejemplo de salida</h3>
    18
    <h3>Explicación</h3>
    Las aristas que forman el árbol generador máximo son las que tienen pesos 3, 7 y 8, al sumar estos
    valores sale 18.
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
Use el <a href="Algoritmo_de_Kruskal.php">algoritmo de Kruskal</a> pero ordenando las aristas 
por el peso mayor en lugar del peso menor. No olvide usar long long.
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