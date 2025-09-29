<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas de productos</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); $Nombre_del_problema = "Producto.php"; /*Nombre.php*/
    $Otrito = "Producto"; /*Nombre*/ $Yo = 6; /*ID del problema*/ ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>CONSULTAS DE PRODUCTOS</h1>
    Se te dará un número entero n y un arreglo a con n números enteros, luego se te dará un número q y 
    a continuación se te darán q pares de números l y r. Por cada par (l, r) considera el subarreglo
    de a<sub>l</sub>, a<sub>l + 1</sub>, ..., a<sub>r</sub>, multiplica los números del subarreglo
    y al final multiplica todos los resultados obtenidos. Como el resultado va a ser muy grande, imprime la 
    respuesta <a href="Aritm_tica_modular.php">módulo</a> 1000000007.
    <h3>Límites</h3>
    1 &le; n, q &le; 100000 <br>
    -1000000000 &le; a<sub>i</sub> &le; 1000000000 <br>
    a<sub>i</sub> &ne; 0 <br>
    0 &le; l<sub>j</sub> &le; r<sub>j</sub> &le; n - 1
    <h3>Ejemplo de entrada</h3>
    4 <br>
    7 4 8 6 <br>
    2 <br>
    2 3 <br>
    0 0 <br>
    <h3>Ejemplo de salida</h3>
    336
    <h3>Explicación</h3>
    El primer subarreglo es {8, 6} y el segundo subarreglo es {7}, el producto de los elementos 
    del primer subarreglo es 48 y el producto del segundo subarreglo es 7, el producto de los 
    resultados obtenidos es 336.
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