<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de prefijos.</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <center><h1 class="Ttulo">SUMA DE PREFIJOS</h1></center>
    La suma de prefijos es una estructura de datos que nos permite encontrar la suma de cada 
    prefijo en un arreglo y usar esas sumas para poder encontrar la suma de cada uno de 
    los subarreglos con complejidad constante. Esto hace que sea mucho más veloz que sumar 
    cada uno de los elementos de cada subarregllo individualmente.
    <h3>¿Cómo funciona?</h3>
    Iniciamos con un arreglo igual al arreglo del cual queremos sacar la suma de prefijos e iteramos
    desde la posición 1 hasta la última posición sumando a la posición actual lo que había en la 
    anterior posición. <br>
    Si queremos sacar la suma de los valores de un subarreglo que va desde la posición i hasta la 
    posición j, solo tenemos que tomar el valor en la posición j de nuestra suma de prefijos y 
    restarle el valor en la posición i - 1 de la suma de prefijos. Ten en cuenta que no se debe restar
    este valor si es que i = 0. Veamos un ejemplo de implementación.
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;deque&lt;int&gt; Arreglo = {4, 287, 27, 8, 12, 228, 7, 25, 6, 17, 45, 12};<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 1; i &lt; 12; i++) Arreglo[i] += Arreglo[i - 1];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"La suma del rango [6, 8] es "&lt;&lt;Arreglo[8] - Arreglo[5]&lt;&lt;".";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    }
    </h4>
    La complejidad del preproceso es O(n) donde n es el tamaño del arreglo y la complejidad por 
    consulta es O(1). Esto hace que sea más rápido que calcular la suma de cada subarreglo en cada 
    consulta sumando cada elemento individualmente, cuya complejidad es O(n) por consulta. Ten en 
    cuenta que puedes usar una suma de prefijos con otras operaciones solo si estas tienen un 
    inverso como la suma y la resta, la multiplicación y la división y otras. No funciona con las 
    operaciones sin inversos como el mínimo.
    </div>
</body>
</html>