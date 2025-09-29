<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máximo en un rango y medio máximo</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); $Nombre_del_problema = "M_ximo.php"; /*Nombre.php*/
    $Otrito = "M_ximo"; /*Nombre*/ $Yo = 7; /*ID del problema*/ ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>MÁXIMO EN UN RANGO Y MEDIO MÁXIMO</h1>
    Se te dará un número entero n y un arreglo a con n números enteros, luego se te dará un número q y 
    a continuación se te darán q pares de números l y r. Por cada par (l, r) considera el subarreglo
    de a<sub>l</sub>, a<sub>l + 1</sub>, ..., a<sub>r</sub>, obtén el máximo valor de este subarreglo y guárdalo.
    Tu tarea es ordenar esta lista de menor a mayor y obtener el valor que esté al medio de la lista.
    <h3>Límites</h3>
    1 &le; n, q &le; 100001 <br>
    q es impar <br>
    -1000000000 &le; a<sub>i</sub> &le; 1000000000 <br>
    0 &le; l &le; r &le; n - 1
    <h3>Ejemplo de entrada</h3>
    7 <br>
    7 1 4 7 8 3 6 <br>
    3 <br>
    0 0 <br>
    4 6 <br>
    2 5
    <h3>Ejemplo de salida</h3>
    8
    <h3>Explicación</h3>
    El primer subarreglo es {7}, el segundo subarreglo es {8, 3, 6} y el último subarreglo es {4, 7, 8, 3}. Los 
    máximos son 7, 8 y 8, aquí el 8 es el que está al medio de la lista tras ordenar de menor a mayor, así que 
    esa es la respuesta.
    <h3>Casos y envíos</h3>
    <?php
        if(isset($_SESSION["ID"])){
    ?>
    <form action="Comprobar22.php?Este_de_aqu_=<?php echo $Yo; ?>&Antes=<?php echo $Nombre_del_problema; ?>" method="post">
        <button onclick="d0()">Descargar caso 0</button>
        <input type="text" name="r0" required maxlength="20" autocomplete="off" placeholder="Respuesta"><br>
        <button onclick="d1()">Descargar caso 1</button>
        <input type="text" name="r1" required maxlength="20" autocomplete="off" placeholder="Respuesta"><br>
        <button onclick="d2()">Descargar caso 2</button>
        <input type="text" name="r2" required maxlength="20" autocomplete="off" placeholder="Respuesta"><br>
        <input type="submit" value="Verificar">
        <input type="reset" value="Borrar">
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