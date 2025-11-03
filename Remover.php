<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php session_start();
        $_SESSION["P_gina"] = 3;
        session_write_close(); include("Plantilla.php"); $Nombre_del_problema = "Remover.php"; /*Nombre.php*/
    $Otrito = "Remover"; /*Nombre de la carpeta*/ $Yo = 14; /*ID del problema*/ ?>
    <div class="Prioridad1">
    <h1>REMOVER</h1>
    Se te dará un grafo no dirigido conexo y tu tarea será contar la cantidad de nodos que
    de ser removidos no causarían que el grafo deje de ser conexo. Ten en cuenta que los 
    nodos no se remueven del grafo. Se te dará un número entero n que representará la
    cantidad de nodos del grafo y un número entero m que representará la cantidad de aristas 
    del grafo, a continuación se te darán m pares de números a y b que representan que hay una 
    arista que une los nodos a y b. 
    <h3>Límites</h3>
    1 &le; n &le; 200000 <br>
    n - 1 &le; m &le; 400000 <br>
    0 &le; a<sub>i</sub>, b<sub>i</sub> &le; n <br>
    a<sub>i</sub> &ne; b<sub>i</sub> <br>
    {a<sub>i</sub>, b<sub>i</sub>} &ne; {a<sub>j</sub>, b<sub>j</sub>}
    <h3>Ejemplo de entrada</h3>
    7 8 <br>
    0 2 <br>
    0 3 <br>
    1 3 <br>
    1 4 <br>
    2 5 <br>
    5 3 <br>
    3 6 <br>
    4 6
    <h3>Ejemplo de salida</h3>
    6
    <h3>Explicación</h3>
    El único nodo que al ser removido causaría que el grafo deje de ser conexo es el nodo 5, por lo 
    cual se puede remover cualquiera de los otros 6 nodos sin que el grafo deje de ser conexo.
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
Use al algoritmo visto en <a href="Puentes_y_puntos_de_articulaci_n.php">esta lección</a> con un 
contador que esté como variable universal que disminuya en 1 cada vez que se encuentre un punto de
articulación.
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