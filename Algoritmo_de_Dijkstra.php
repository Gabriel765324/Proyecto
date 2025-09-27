<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmo de Dijkstra</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>ALGORITMO DE DIJKSTRA</h1>
    El algoritmo de Dijkstra nos permite encontrar los caminos más cortos de un nodo hacia los demás 
    nodos y las distancias de esos caminos, pero a diferencia de la búsqueda en anchura, este también 
    funciona en grafos no ponderados con aristas sin pesos negativos.
    <h3>¿Cómo funciona?</h3>
    Es bastante similar a una búsqueda en profundidad, la diferencia es que la fila ordena sus 
    nodos por distancia para saber cuál es el siguiente nodo que se debe revisar. Usaremos esta 
    distancia en lugar de un deque que nos diga si un nodo está visitado y usaremos un set de pares 
    para que ordene los nodos por distancia. Veamos un ejemplo en donde Grafo guarda pares en donde 
    Grafo[i][j].first es el extremo de la arista y Grafo[i][j].second es el peso de la arista:
    <h4>
    &nbsp;&nbsp;&nbsp;&nbsp;set&lt; pair&lt;int, int&gt; &gt; Fila;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Fila.insert({0, 0});<br>
    &nbsp;&nbsp;&nbsp;&nbsp;deque&lt;int&gt; Distancias(n, -2);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Distancias[0] = 0;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;deque&lt;int&gt; Anteriores(n, -2);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;while(!Fila.empty()){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int Nodo = (*Fila.begin()).second;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fila.erase(Fila.begin());<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(auto E: Grafo[Nodo]){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(Distancias[E.first] == -2 or Distancias[E.first] &gt; Distancias[Nodo] + E.second){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anteriores[E.first] = Nodo;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Distancias[E.first] = Distancias[Nodo] + E.second;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fila.insert({Distancias[E.first], E.first});<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    </h4>
    Es importante que los elemenos first de la fila sean las distancias para que el set les dé prioridad 
    en lugar de a los índices de los nodos. La complejidad del algoritmo de Dijkstra es O((n + e) log n)
    en donde n es el tamaño del grafo y e es el número de aristas.
    </div>
</body>
</html>