<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puentes y puntos de articulación</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>PUENTES Y PUNTOS DE ARTICULACIÓN</h1>
    En un grafo no dirigido conexo, un puente es una arista que al ser removida causaría que el 
    grafo deje de ser conexo y un punto de articulación es un nodo que al ser removido cuasaría 
    que el grafo deje de ser conexo. Ahora usaremos 2 valores que se pueden obtener de una búsqueda
    en profundidad que se suelen llamar en inglés dfs_num y dfs_low, dfs_num es un número que nos 
    indica el momento en donde llegamos al nodo y dfs_low es el mínimo de los dfs_num de los nodos que ya 
    estén visitados que se unan directamente al nodo, el dfs_num del nodo y los dfs_low de los vecinos 
    no visitados. Si tenemos 2 nodos que 
    llamaremos a y b, la arista que los une es un puente si el dfs_num de a es menor que el dfs_low 
    de b y a es un punto de articulación si el dfs_num de a es menor o igual que el dfs_low de b, con 
    excepción del caso en donde a sea igual al nodo desde el cual iniciamos la búsqueda en profundidad, 
    este será un punto de articulación solamente si este fue a al menos 2 nodos durante la búsqueda 
    en profundidad. Veamos una implementación en donde 0 es el nodo inicial.
    <h4>
    deque&lt; deque&lt;int&gt; &gt; Grafo; //Le asignaremo su tamaño en la función principal.<br>
    deque&lt;bool&gt; Visitados; //Le asignaremo su tamaño en la función principal.<br>
    deque&lt;int&gt; dfs_num, dfs_low; //Les asignaremos sus tamaños en la función principal.<br>
    int t = 0, Puntos_de_articulaci_n = 0;<br>
    void DFS(int Nodo, int Anterior){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cerr&lt;&lt;Nodo&lt;&lt;" ";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;dfs_num[Nodo] = t;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;dfs_low[Nodo] = t;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;t++;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Visitados[Nodo] = 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;int Contador = 0; //Esta será la variable que nos ayudará a determinar si el nodo inicial es un punto de articulación.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(auto E: Grafo[Nodo]){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(Visitados[E]){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(E != Anterior) dfs_low[Nodo] = min(dfs_low[Nodo], dfs_num[E]);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DFS(E, Nodo);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dfs_low[Nodo] = min(dfs_low[Nodo], dfs_low[E]);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contador++;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(auto E: Grafo[Nodo]){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(dfs_num[Nodo] &lt; dfs_low[E]) cout&lt;&lt;"La arista "&lt;&lt;Nodo&lt;&lt;" "&lt;&lt;E&lt;&lt;" es un puente.\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(Nodo != 0 and dfs_num[Nodo] &lt;= dfs_low[E]) Puntos_de_articulaci_n++;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(Nodo == 0 and Contador &gt;= 2) Puntos_de_articulaci_n++;<br>
    }<br>
    </h4>
    Podríamos necesitar cambiar un poco la implementación si es que en el problema nos pueden dar
    aristas repetidas. La complejidad es O(n + e) en donde n es el tamaño del grafo y e es la 
    cantidad de aristas.
    </div>
</body>
</html>