<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación dinámica</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>PROGRAMACIÓN DINÁMICA</h1>
    La programación dinámica es una técnica que podemos usar para encontrar soluciones a problemas eligiendo 
    la mejor solución posible para cada estado combinando las soluciones de otros estados. Para poder usar esta 
    técnica nosotros tenemos que se capaces de elegir estados y de hacer transiciones, cosa que se vuelve más 
    fácil mientras más se practique. La programación dinámica se suele usar más en problemas que te piden minimizar 
    o maximizar algo y en algunos problemas que te piden contar algo. La programación dinámica se puede implementar 
    de 2 maneras diferentes, en una usamos una función recursiva y un deque que guarde las respuestas de los 
    estados que vayamos calculando (llamada top-down) y en otra solo usamos un deque y calculamos las respuestas
    a cada estado (llamada bottom-up). Veamos algunos problemas clásicos:
    <h3>Mochila</h3>
    En este problema se tiene una mochila que puede llevar un peso máximo y una lista de objetos con un valor 
    y un peso. El objetivo es maximizar el valor que se puede llevar en la mochila. <br>
    Para resolver este problema 
    necesitamos un estado que consiste en 2 parámetros: el índice del objeto en el que estamos, que llamaremos i,
    y el peso que aún puede llevar la mochila, que llamaremos p. La respuesta de este estado es el mayor entre
    la respuesta del estado (i + 1, p) y la respuesta al estado (i + 1, p - Peso del objeto) más el valor de ese
    objeto (solo toma en cuenta si aún podemos añadir el objeto a la mochila). Esto representa que estamos
    considerando lo mejor entre llevar el objeto y no llevarlo. Veamos una implementación con top-down:
    <h4>
    deque&lt; pair&lt;int, int&gt; &gt; Objetos = {{5, 1}, {7, 8}, {3, 4}, {1, 9}, {7, 2}};<br>
    deque&lt; deque&lt;int&gt; &gt; Estados(5, deque&lt;int&gt;(10, -2));<br>
    //Como hay 5 objetos, necesitamos 5 posiciones y cada posición necesita otras 10 posiciones para representar todos los pesos que podría tener la mochila con 9 de capacidad.
    int Resolver(int i, int p){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(i == Objetos.size()) return 0;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;//Vemos si ya acabamos de seleccionar objetos.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(Estados[i][p] != -2) return Estados[i][p];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;/*Vemos si ya se calculó la respuesta a este estado antes<br>
    &nbsp;&nbsp;&nbsp;&nbsp;para no calcularlo de nuevo cada vez que lo necesitemos.*/<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(p &gt;= Objetos[i].second) return Estados[i][p] = max(Resolver(i + 1, p), Resolver(i + 1, p - Objetos[i].second) + Objetos[i].first);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;//Elejimos lo mejor entre tomar el objeto o no.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;else return Estados[i][p] = Resolver(i + 1, p);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;/*En ambos casos es importante que Estado[i][p] sea modificado para así no<br>
    &nbsp;&nbsp;&nbsp;&nbsp;calcular de nuevo las respuestas que vayamos obteniendo.*/<br>
    }<br>
    </h4>
    En este caso la mochila puede llevar hasta 9 de peso y la lista tiene 5 objetos: un objeto de 5 de
    valor y 1 de peso, un objeto de 7 de valor y 8
    de peso, un objeto de 3 de valor y 4 de peso, un objeto de 1 de valor y 9 de peso y un objeto de 7 de valor
    y 2 de peso. Para calcular la respuesta tendríamos que llamar a esta función desde la función principal con 
    los parámetros (0, 9) representando que estamos en el primer objeto con una mochila que aún puede 
    llevar 9 de peso.
    <h3>Cambio de monedas</h3>
    Tienes monedas de varios valores y un valor. Puedes tomar cualquier cantidad de monedas de cualquier valor 
    y se te pregunta si es posible hacer que la suma de valores de monedas que tomaste sea igual al valor dado. <br>
    Para resolver este problema se necesita que nuestro estado sea el índice de la moneda en la que estamos 
    (al que llamaremos i) y el valor que suman las monedas que tomamos hasta el momento (al que llamaremos v), 
    la transición será saber si se puede resolver el estado (i + 1, v) o el estado (i, v + Valor de la moneda actual).
    Esta transición representa elegir pasar a la siguiente moneda o tomar una de las monedas del valor actual.
    Veamos una implementación con bottom-up:
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;deque&lt;int&gt; Monedas = {7, 5, 18, 6, 4, 12};<br>
    &nbsp;&nbsp;&nbsp;&nbsp;deque&lt; deque&lt;bool&gt; &gt; Estado(7, deque&lt;bool&gt;(63, 0));<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; 7; i++) Estado[i][62] = 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;//Para todos los casos en donde la suma que llevamos es 62 la respuesta será que sí.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 5; i &gt; -1; i--){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int j = 62; j &gt; -1; j--){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Estado[i][j] = Estado[i + 1][j];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Lo que pasa si pasamos a la siguiente moneda.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(j + Monedas[i] &lt; 63) Estado[i][j] = Estado[i][j] or Estado[i][j + Monedas[i]];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*Vemos si al tomar una de la moneda actual no nos<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pasamos de la suma que buscamos, después vemos si se puede <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lograr la suma si es que tomamos la moneda.*/<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;Estado[0][0];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    }
    </h4>
    En este caso hay 6 monedas con los valores 7, 5, 18, 6, 4 y 12 y se quiere lograr la suma de 62. Podemos saber si 
    se pudo o no viendo la respuesta de Estado[0][0] porque esto representa que estamos en la primera moneda 
    y aún no tomamos monedas.<br>
    La complejidad de una programación dinámica es O(n * t) en donde n es la cantidad de estados posibles y t 
    es la complejidad de nuestras transiciones.
    </div>
</body>
</html>