<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); $Nombre_del_problema = "Ordenar.php"; /*Nombre.php*/
    $Otrito = "Ordenar"; /*Nombre*/ $Yo = 3; /*ID del problema*/ ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>ORDENAR</h1>
    Se te dará un número entero n y un arreglo de n números enteros a. Tú tienes que ordenar los elementos de a de mayor a 
    menor, multiplicar cada número por su posición (empezando del 0) e imprime la suma de los valores obtenidos. <br>
    Ten en cuenta que necesitarás usar long long para que el entero no se desborde.
    <h3>Límites</h3>
    1 &le; n &le; 1000000 <br>
    1 &le; a<sub>i</sub> &le; 100000
    <h3>Ejemplo de entrada</h3>
    6 <br>
    7 5 1 9 8 3
    <h3>Ejemplo de salida</h3>
    54
    <h3>Explicación</h3>
    El arreglo ordenado de menor a mayor es 9 8 7 5 3 1, luego al multiplicar cada número por su posición sale 
    9 * 0 = 0, 8 * 1 = 8, 7 * 2 = 14, 5 * 3 = 15, 3 * 4 = 12 y 1 * 5 = 5 y al sumar los números nos sale 54.
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