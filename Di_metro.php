<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diámetro (árbol)</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); $Nombre_del_problema = "Di_metro.php"; /*Nombre.php*/
    $Otrito = "Di_metro"; /*Nombre de la carpeta*/ $Yo = 12; /*ID del problema*/ ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>DIÁMETRO (árbol)</h1>
    Tu tarea es calcular el <a href="Conceptos_de_grafos.php#DDDD">diámetro</a> de un árbol. Se te dará un número entero n que representará el 
    número de nodos del grafo y se te darán n - 1 pares de números a y b que representan que hay una 
    arista uniendo los nodos a y b.
    <h3>Límites</h3>
    1 &le; n &le; 1000000 <br>
    0 &le; a<sub>i</sub>, b<sub>i</sub> &le; n - 1
    <h3>Ejemplo de entrada</h3>
    8 <br>
    0 3 <br>
    4 1 <br>
    6 1 <br>
    0 2 <br>
    5 2 <br>
    1 7 <br>
    1 0 
    <h3>Ejemplo de salida</h3>
    4
    <h3>Explicación</h3>
    La distancia más larga entre nodos del árbol es 4, distancia que hay entre los nodos 4 y 5, los 
    nodos 5 y 6 y los nodos 5 y 7.
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
Use una <a href="B_squedas.php">búsqueda</a> para determinar el nodo a más lejano de un nodo 
cualquiera, después vuelva a usar una búsqueda para encontrar el nodo b más lejano a a. La 
respuesta será la distancia entre a y b.
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
        <button onclick="d0()" class="Descarga">Descargar caso 0</button>
        <input type="text" name="r0" required maxlength="20" autocomplete="off" placeholder="Respuesta" class="Caja_de_respuesta"><br>
        <button onclick="d1()" class="Descarga">Descargar caso 1</button>
        <input type="text" name="r1" required maxlength="20" autocomplete="off" placeholder="Respuesta" class="Caja_de_respuesta"><br>
        <button onclick="d2()" class="Descarga">Descargar caso 2</button>
        <input type="text" name="r2" required maxlength="20" autocomplete="off" placeholder="Respuesta" class="Caja_de_respuesta"><br>
        <input type="submit" value="Verificar" class="Responder"> <input type="reset" value="Borrar" class="Responder">
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