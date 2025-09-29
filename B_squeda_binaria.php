<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda binaria</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>BÚSQUEDA BINARIA</h1>
    La búsqueda binaria nos permite encontrar de manera eficiente el punto en donde cambia el valor de una 
    función binaria (que solo puede dar 2 valores y el valor que da la función solo cambia 1 vez).
    La podemos usar para buscar un elemento en un arreglo
    ordenado, encontrar la raíz con cualquier índice de cualquier número, optimizar la <a href="Mesa_dispersa.php">mesa dispersa</a>
    y muchas otras aplicaciones. <br>
    <h3>¿Cómo funciona?</h3>
    Funciona tieniendo 2 punteros y evaluando la función con su promedio, una vez evaluada debemos decidir qué 
    puntero mover hacia el promedio y continuamos el proceso hasta obtener el resultado deseado. Veamos un ejemplo para obtener
    la raíz cuarta de 2934.
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;double Puntero_izquierdo = 0, Puntero_derecho = 2934;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(; Puntero_derecho - Puntero_izquierdo > 0.000000001;){ //Esto permite establecer la presición.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double Promedio = (Puntero_izquierdo + Puntero_derecho) / (double)2;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(Promedio * Promedio * Promedio * Promedio &lt;= 2934) Puntero_izquierdo = Promedio;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*El puntero izquierdo empieza siendo menor que el<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;resultado que buscamos, es por eso que lo debemos<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mover a él si el promedio es menor o igual que el<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;resultado deseado.*/<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else Puntero_derecho = Promedio;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;Puntero_izquierdo;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    }
    </h4>
    La búsqueda binaria varía un poco cuando solo buscamos respuestas en números enteros, podemos guardar en 
    una variable la mejor respuesta que encontremos y mover los punteros un poco más. Veamos un ejemplo en 
    el que tratamos de buscar el mayor valor en un arreglo que no se pasa de 23.
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;deque&lt;int&gt; Arreglo = {1, 4, 58, 64, 742, 5, 7, 6, 3, 25, 8, 45, 13, 49, 81};<br>
    &nbsp;&nbsp;&nbsp;&nbsp;sort(Arreglo.begin(), Arreglo.end());<br>
    &nbsp;&nbsp;&nbsp;&nbsp;int Izquierda = 0, Derecha = 14, Respuesta = 0;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;while(Izquierda &lt; Derecha + 1){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int Promedio = (Izquierda + Derecha) / 2;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(Arreglo[Promedio] &lt;= 23){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Respuesta = Promedio;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Izquierda = Promedio + 1; //Ya no es necesario tomar en cuenta el promedio.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else Derecha = Promedio - 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;Arreglo[Respuesta];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    }
    </h4>
    La búsqueda binaria nos permite encontrar resultados de manera bastante veloz porque cada iteración descarta 
    la mitad de la información que queda, esto hace que su complejidad sea O(log n) en donde n es la diferencia 
    de los punteros al inicio en el caso de que estemos usando la búsqueda binaria para buscar respuestas en los 
    números enteros. En caso de estar buscando una respuesta con números racionales, nosotros tendremos que 
    elegir la precisión que queremos, pero igualmente será sumamente veloz.
    </div>
</body>
</html>