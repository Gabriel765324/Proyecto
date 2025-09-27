<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmo de Kadane</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>ALGORITMO DE KADANE</h1>
    El algoritmo de Kadane nos permite calcular la suma máxima que puede tener un subarreglo entre
    todos los subarreglos de un arreglo. Este es más rápido que usar una suma de prefijos para ver cuáles
    son las sumas de cada uno de los subarreglos.
    <h3>¿Cómo funciona?</h3>
    Empezamos con un contador que inicia en 0 e iteramos desde el inicio del arreglo hasta el final.
    Cada vez que llegamos a una nueva posición del arreglo, aumentamos el valor de este contador
    en el valor de esa posición del arreglo. Si en algún momento ese contador se vuelve negativo, 
    cámbialo a 0. La máxima suma que puede tener un subarreglo entre todos los subarreglos del 
    arreglo será el mayor valor que haya tenido el contador a lo largo de toda la iteración. Veamos
    un ejemplo:
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;deque&lt;int&gt; Arreglo = {4, -287, 27, 8, -12, 228, 7, 25, -6, 17, -45, 12};<br>
    &nbsp;&nbsp;&nbsp;&nbsp;int Contador = 0, Respuesta = 0;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; 12; i++){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contador += Arreglo[i];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Respuesta = max(Respuesta, Contador);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contador = max(0, Contador);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"La respuesta es: "&lt;&lt;Respuesta;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    }
    </h4>
    La complejidad de este algoritmo es O(n) en donde n es el tamaño del arreglo, es más veloz
    que revisar la suma de cada subarreglo con una suma de prefijos porque esto tendría una 
    complejidad de O(n²).
    </div>
</body>
</html>