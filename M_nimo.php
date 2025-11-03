<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mínimo en un rango y asignación</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php session_start();
        $_SESSION["P_gina"] = 3;
        session_write_close(); include("Plantilla.php"); $Nombre_del_problema = "M_nimo.php"; /*Nombre.php*/
    $Otrito = "M_nimo"; /*Nombre de la carpeta*/ $Yo = 8; /*ID del problema*/ ?>
    <div class="Prioridad1">
    <h1>MÍNIMO EN UN RANGO Y ASIGNACIÓN</h1>
    Se te dará un número entero n y un arreglo a con n números enteros, luego se te dará un número q y 
    a continuación se te darán q tríos de números l, r y v. Por cada par (l, r) considera el subarreglo
    de a<sub>l</sub>, a<sub>l + 1</sub>, ..., a<sub>r</sub>, obtén el mínimo valor de este subarreglo y 
    cambia todos sus valores por v. Tu tarea es encontrar la suma de todos estos valores mínimos.
    <h3>Límites</h3>
    1 &le; n, q &le; 100000 <br>
    -1000000000 &le; a<sub>i</sub>, v<sub>j</sub> &le; 1000000000 <br>
    0 &le; l<sub>j</sub> &le; r<sub>j</sub> &le; n - 1
    <h3>Ejemplo de entrada</h3>
    7 <br>
    5 6 7 1 9 8 2 <br>
    4 <br>
    0 0 0 <br>
    0 3 6 <br>
    4 6 -8 <br>
    0 6 -44
    <h3>Ejemplo de salida</h3>
    -1
    <h3>Explicación</h3>
    En la primera consulta el subarreglo es {5}, guardamos el 5 y cambiamos ese valor del arreglo por 0, esto causa
    que el arreglo se vuela {0, 6, 7, 1, 9, 8, 2}. <br>
    En la segunda consulta el subarreglo es {0, 6, 7, 1}, guardamos el 0 y cambiamos esos valores del arreglo por 6, esto causa
    que el arreglo se vuela {6, 6, 6, 6, 9, 8, 2}. <br>
    En la tercera consulta el subarreglo es {9, 8, 2}, guardamos el 2 y cambiamos esos valores del arreglo por -8, esto causa
    que el arreglo se vuela {6, 6, 6, 6, -8, -8, -8}. <br>
    En la primera consulta el subarreglo es {6, 6, 6, 6, -8, -8, -8}, guardamos el -8 y cambiamos esos valores del arreglo por -44, esto causa
    que el arreglo se vuela {-44, -44, -44, -44, -44, -44, -44}. <br>
    Al final calculamos 5 + 0 + 2 - 8 y esto nos da -1.
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
Use un <a href="_rbol_de_segmentos.php">árbol de segmentos</a> para las consultas. No olvide usar 
long long.
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