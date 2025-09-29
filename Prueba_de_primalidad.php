<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de primalidad</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>PRUEBA DE PRIMALIDAD</h1>
    La prueba de primalidad nos permite saber si un número es primo o no, para implementarla de manera eficiente 
    se usa la criba de Eratóstenes para encontrar números primos y verificamos que ningún número primo que vaya de 
    2 hasta la raíz cuadrada del número que estamos verificando sea un divisor del número que estamos verificando.
    <h3>Criba de Eratóstenes</h3>
    Este algoritmo nos permite encontrar números primos. Para usarlo necesitamos un arreglo en donde al inicio cada 
    posición sea 1, luego marcamos las posiciones 0 y 1 con un 0 porque no son primos y empezamos a ver el arreglo 
    desde la posición 2. Si es que en algún momento estamos en una posición (que llamaremos i) marcada con un 1, marcamos todos 
    los múltiplos de i a partir de i<sup>2</sup> con 0. Al final solo quedarán marcados con 1 solo los números 
    primos.
    <h3>Verificación</h3>
    Guardaremos todos los números primos que hayamos encontrado y para verificar si un número es primo, solo 
    revisamos que todos los números primos que no se pasen de la raíz cuadrada de ese número no sean divisores
    de ese número. Veamos una implementación para ver si 2717 es primo o no:
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;deque&lt;bool&gt; Criba(57, 1);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Criba[0] = 0;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Criba[1] = 0;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;deque&lt;int&gt; Primos;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 2; i &lt; 57; i++){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(Criba[i]){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Primos.push_back(i);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int j = i * i; j &lt; 57; j += i) Criba[j] = 0;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; 57; i++){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(Primos[i] * Primos[i] &gt; 2717) break;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(2717 % Primos[i] == 0){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"No es primo.";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"Es primo.";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    }
    </h4>
    La complejidad de la criba de Eratóstenes es O(n log log n) en donde n es el número hasta el cual estamos
    buscando números primos y la complejidad de verificar si es primo o no de esta manera es O(&radic;n / log n)
    en donde n es el número que estamos verificando. Para usar este método necesitarás todos los números primos menores o iguales a la raíz cuadrada del número 
    que estamos verificando.
    </div>
</body>
</html>