<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmo de Kruskal</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>ALGORITMO DE KRUSKAL</h1>
    El algoritmo de Kruskal nos permite encontrar un árbol generador mínimo de un grafo conexo ponderado.
    <h3>¿Qué es un árbol generador mínimo?</h3>
    Son las aristas que se necesitan para unir todos los nodos de un grafo de manera que la suma 
    de sus pesos sea la menor posible. Tiene la propiedad de que el conjunto de pesos de las 
    aristas de cualquier árbol generador mínimo siempre es el mismo.
    <h3>¿Cómo funciona?</h3>
    Ordenaremos las aristas del grafo por pesos de menor a mayor e iremos por cada una de ellas.
    Con la <a href="Unir_conjuntos.php">unión de conjuntos disjuntos</a> veremos si los nodos que 
    une una arista tienen el mismo representante, y usaremos esa arista en caso de que no sea así.
    Veamos un ejemplito asumiendo que ya tenemos lo 
    necesario para la unión de conjuntos disjuntos y m es el número de aristas:
    <h4>
    deque&lt; tuple&lt;int, int, int&gt; &gt; Aristas(m);<br>
    for(int i = 0; i &lt; m; i++) cin&gt;&gt;get&lt;0&gt;(Aristas[i])&gt;&gt;get&lt;1&gt;(Aristas[i])&gt;&gt;get&lt;2&gt;(Aristas[i]);<br>
    //Es importante que el primer elemento de cada tuple sea el peso de la arista.<br>
    sort(Aristas.begin(), Aristas.end());<br>
    int Peso_total = 0;<br>
    for(int i = 0; i &lt; m; i++){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(Buscar(get&lt;1&gt;(Aristas[i])) != Buscar(get&lt;2&gt;(Aristas[i]))){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unir(get&lt;1&gt;(Aristas[i]), get&lt;2&gt;(Aristas[i]));<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peso_total += get&lt;0&gt;(Aristas[i]);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    }<br>
    cout&lt;&lt;"El peso del _rbol generador m_nimo es: "&lt;&lt;Peso_total;<br>
    </h4>
    La complejidad del algoritmo de Kruskal es O(n + e log e) en donde n es el número de nodos y e
    es el número de aristas.
    </div>
</body>
</html>