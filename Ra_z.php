<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novena raíz</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); $Nombre_del_problema = "Ra_z.php"; /*Nombre.php*/
    $Otrito = "Ra_z"; /*Nombre de la carpeta*/ $Yo = 17; /*ID del problema*/ ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>NOVENA RAÍZ</h1>
    Se te dará un número entero n, luego se te dará un arreglo a con n números enteros. Para cada 
    a<sub>i</sub> encuentra el mayor número entero que al elevarse a 9 no es mayor que a<sub>i</sub>.
    Al final suma todos los valores obtenidos.
    <h3>Límites</h3>
    1 &le; n &le; 1000000 <br>
    1 &le; a<sub>i</sub> &le; 1000000000000000000
    <h3>Ejemplo de entrada</h3>
    5 <br>
    4654 1 432 765 49651
    <h3>Ejemplo de salida</h3>
    9
    <h3>Explicación</h3>
    1<sup>9</sup> = 1, 2<sup>9</sup> = 512, 3<sup>9</sup> = 19683 y 4<sup>9</sup> = 262144. Entonces la respuesta para 4654
    es 2, la respuesta para 1 es 1, la respuesta para 432 es 1, la respuesta para 765 es 2 y la 
    respuesta para 49651 es 3. Al sumar estas respuestas sale 9.
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