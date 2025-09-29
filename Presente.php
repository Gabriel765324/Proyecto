<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Está presente?</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); $Nombre_del_problema = "Presente.php"; /*Nombre.php*/
    $Otrito = "Presente"; /*Nombre*/ $Yo = 4; /*ID del problema*/ ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>¿ESTÁ PRESENTE?</h1>
    Se te da un número entero n y un arreglo a de n números enteros y luego se te da un número entero q junto 
    a un arreglo b de q números enteros. Cuenta la cantidad de elementos en b que aparecen en a al menos una vez.
    <h3>Límites</h3>
    1 &le; n, q &le; 1000000 <br>
    1 &le; a<sub>i</sub>, b<sub>j</sub> &le; 1000000000 
    <h3>Ejemplo de entrada</h3>
    7 <br>
    7 1 5 8 4 7 5 <br>
    5 <br>
    1 2 7 4 1
    <h3>Ejemplo de salida</h3>
    4
    <h3>Explicación</h3>
    2 es el único elemento de b que no aparece en a.
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