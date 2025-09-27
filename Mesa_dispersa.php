<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesa dispersa.</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>MESA DISPERSA</h1>
    La mesa dispersa es una estructura de datos que nos permite hacer consultas 
    en rangos de un arreglo de varias operaciones, pero a diferencia de la suma 
    de prefijos y el árbol de Fenwick, esta no requiere que la operación hecha 
    tenga un inverso. La desventaja que tiene frente al árbol de Fenwick es que 
    tiene que actualizarse por completo si se modifica un valor, por lo cual no 
    se puede usar en problemas que requieran actualizaciones.
    <h3>¿Cómo funciona?</h3>
    La mesa dispersa guarda para cada posición del arreglo el resultado de cada una 
    de las consultas en rangos con una longitud que es una potencia de 2 + 1 y tienen a
    esa posición como último elemento.
    <h3>Creación</h3>
    Para explicar la implementación asumamos que nuestra mesa dispersa se llama m y nuestro arreglo se llama a. <br>
    Para crear m iniciamos a iterar por el arreglo. Si estamos en la posición i, añadimos {a[i], i} a m[i], 
    si i es 0, pasamos al siguiente, si no, creamos las variables r que empezará como Operación(a[i], a[i - 1]), j que 
    empezará siendo i - 1 y k que será 0, añadimos {r, j} a m[i] y empezamos un bucle en donde si k + 1 es una posición 
    de m[j]; cambiamos r a Operación(r, m[j][k + 1].first), cambiamos j a m[j][k + 1].second y añadimos {r, j} a m[i]; pero 
    si k + 1 no es una posición de m[j], significa que terminamos de crear m[i] y podemos pasar a la siguiente 
    posición del arreglo a.
    <h3>Consultas</h3>
    Si queremos hacer una consulta del rango [i, j], empezaremos creando una variable r que empezará siendo a[j] y 
    repetiremos un bucle hasta que j sea igual a i. En este bucle veremos cuál se el mayor índice que hay en m[j] 
    que no es menor que i (se puede buscar rápido con una <a href="B_squeda_binaria.php">búsqueda binaria</a>), una 
    vez encontremos la posición k de la mesa dispera, r se volverá Operación(r, m[j][k].first) y j se volverá
    m[j][k].second. <br>
    <img src="Fotos/Mesa_dispersa.png" alt="No se pudo cargar la imagen." class="Mesa_dispersa"><br>
    Veamos un ejemplo de mesa dispersa para consultas de mínimos en rangos:
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    deque&lt;int&gt; Arreglo = {4, 287, 27, 8, 12, 228, 7, 25, 6, 17, -45, 12, 127, 98, 34, 0, 283};<br>
    deque&lt; deque&lt; pair&lt;int, int&gt; &gt; &gt; Mesa(17);<br>
    void Crear(){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; 17; i++){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesa[i].push_back({Arreglo[i], i});<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(i == 0) continue;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int r = min(Arreglo[i], Arreglo[i - 1]);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesa[i].push_back({r, i - 1});<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int j = i - 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int k = 0;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(; k &lt; Mesa[j].size(); k++){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(k + 1 &lt; Mesa[j].size()){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r = min(r, Mesa[j][k + 1].first);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j = Mesa[j][k + 1].second;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mesa[i].push_back({r, j});<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else break;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    }<br>
    int Consulta(int i, int j){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;int r = Arreglo[j];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;while(i != j){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int Izquierda = 0, Derecha = Mesa[j].size(), Mejor = Izquierda;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(Izquierda &lt; Derecha + 1){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int Promedio = (Izquierda + Derecha) / 2;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(Mesa[j][Promedio].second &gt;= i){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mejor = Promedio;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Izquierda = Promedio + 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else Derecha = Promedio - 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r = min(r, Mesa[j][Mejor].first); //Combinamos esta respuesta con lo que ya teníamos.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j = Mesa[j][Mejor].second;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return r;<br>
    }<br>
    int main(){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Crear();<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"La consulta desde 0 hasta 4 es "&lt;&lt;Consulta(0, 4)&lt;&lt;"\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"La consulta desde 1 hasta 4 es "&lt;&lt;Consulta(1, 4)&lt;&lt;"\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"La consulta desde 10 hasta 16 es "&lt;&lt;Consulta(10, 16)&lt;&lt;"\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    }
    </h4>
    La implementación podría variar un poco si queres hacer cosas como encontrar una suma. La complejidad de la mesa 
    dispersa para un arreglo de tamaño n es O(n log n) para la creación y O(log log n) por consulta, tener consultas 
    tan rápidas permite combinar la mesa dispersa con otras cosas como búsquedas binarias para evitar que la complejidad 
    se vuelva muy alta.
    </div>
</body>
</html>