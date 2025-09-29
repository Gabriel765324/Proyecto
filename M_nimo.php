<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mínimo en un rango y asignación</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); $Nombre_del_problema = "M_nimo.php"; /*Nombre.php*/
    $Otrito = "M_nimo"; /*Nombre de la carpeta*/ $Yo = 8; /*ID del problema*/ ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>MÍNIMO EN UN RANGO Y ASIGNACIÓN</h1>
    Se te dará un número entero n y un arreglo a con n números enteros, luego se te dará un número q y 
    a continuación se te darán q tríos de números l, r y v. Por cada par (l, r) considera el subarreglo
    de a<sub>l</sub>, a<sub>l + 1</sub>, ..., a<sub>r</sub>, obtén el mínimo valor de este subarreglo y 
    cambia todos sus valores por v. Tu tarea es encontrar la suma de todos estos valores mínimos.
    <h3>Límites</h3>
    1 &le; n, q &le; 100000 <br>
    -1000000000 &le; a<sub>i</sub>, v &le; 1000000000 <br>
    0 &le; l &le; r &le; n - 1
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