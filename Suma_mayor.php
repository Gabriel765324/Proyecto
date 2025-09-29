<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma máxima en cada prefijo</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); $Nombre_del_problema = "Suma_mayor.php"; /*Nombre.php*/
    $Otrito = "Suma_mayor"; /*Nombre de la carpeta*/ $Yo = 5; /*ID del problema*/ ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
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