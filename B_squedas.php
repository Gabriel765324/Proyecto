<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda en profuncidad y búsqueda en anchura</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>BÚSQUEDA EN PROFUNDIDAD Y BÚSQUEDA EN ANCHURA</h1>
    Estos 2 algoritmos nos permiten recorrer grafos de diferentes maneras.
    <h3>Búsqueda en profundidad</h3>
    Con la búsqueda en profundidad empezaremos en un nodo cualquiera, cada vez que estemos en un nodo 
    iremos a un nodo cualquiera que no hayamos visitado antes o regresaremos al anterior si es que ya 
    no se puede continuar. También se lo llama DFS por sus siglas en inglés. Este se suele
    implementar con una función recursiva. Veamos un ejemplo si nuestro grafo en lista de adyacencia 
    se llama Grafo y usamos un arreglo de bools para ver qué nodos están visitados al que llamaremos
    Visitados.
    <h4>
    void DFS(int Nodo){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Visitados[Nodo] = 1; //Marcamos todos los nodos que visitemos como visitados.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(auto E: Grafo[Nodo]) if(!Visitados[E]) DFS(E); //Llamamos a la función para cada nodo no visitado.<br>
    }<br>
    </h4>
    <h3>Búsqueda en anchura</h3>
    En esta búsqueda nosotros recorreremos el grafo por capas. Necesitaremos una fila que representaremos 
    con un deque que al inicio tenga un nodo que escogeremos como inicio, luego repetiremos un bucle 
    hasta que la fila quede vacía en donde marcaremos como visitado el primer nodo de la fila, 
    eliminaremos ese nodo de la fila no sin antes guardarlo, recorreremos la lista de adyacencia 
    de ese nodo y, cada vez que encontremos un nodo no visitado lo añadiremos al final de la fila y 
    lo marcaremos como visitado (también marcamos aquí como visitado para evitar que otros nodos 
    lo traten de añadir de nuevo a la fila después). Veamos un ejemplo:
    <h4>
    &nbsp;&nbsp;&nbsp;&nbsp;deque&lt;int&gt; Fila = {0}; //En este caso nuestro inicio será el nodo 0.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;while(!Fila.empty()){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int Nodo = Fila[0];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fila.pop_front();<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visitados[Nodo] = 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(auto E: Grafo[Nodo]){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!Visitados[E]){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fila.push_back(E);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visitados[E] = 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    </h4>
    <h3>Aplicaciones</h3>
    <h3>Ordenamiento topológico</h3>
    El ordenamiento topológico de un grafo dirigido consiste en encontrar una asignación de valores 
    a cada nodo en donde si la arista que conecta los nodos a y b existe, entonces a tiene un mayor valor 
    que b. Para encontrarlo tendremos una búsqueda en profundidad que antes de regresar al nodo 
    anterior cuando un nodo no tenga a dónde ir, le asigne un valor en un contador y la suma 1 a 
    ese contador. Veamos un ejemplo en donde ese contador se llama c, es una variable universal e 
    inicia en 0 y nuestro deque que guarda los valores asignados se llama Orden. 
    <h4>
    void DFS(int Nodo){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Visitados[Nodo] = 1; //Marcamos todos los nodos que visitemos como visitados.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(auto E: Grafo[Nodo]) if(!Visitados[E]) DFS(E); //Llamamos a la función para cada nodo no visitado.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Orden[Nodo] = c;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;c++;<br>
    }<br>
    </h4>
    <h3>Detectar ciclos</h3>
    Con una búsqueda en anchura podemos determinar si un grafo tiene ciclos. <br>
    En el caso de un grafo 
    no dirigido tendremos que ver si en algún nodo se conecta con un nodo visitado. Veamos un 
    ejemplo en donde lo convertimos en una función que retorna 1 se hay un ciclo o 0 si no lo hay.
    <h4>
    bool DFS(int Nodo){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Visitados[Nodo] = 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;bool r = 0;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(auto E: Grafo[Nodo]){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(Visitados[E]) return 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r = r or DFS(E);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return r;<br>
    }<br>
    </h4>
    En el caso de 
    un grafo dirigido ahora los nodos tendrán los estados no visitado, explorado y visitado, un nodo 
    se volverá explorado si llegamos a él y se volverá visitado cuando tenga que regresar a un nodo 
    anterior por no tener a dónde más ir. Si en algún momento un nodo está por ir a un nodo explorado, 
    sabremos que hay un ciclo en el grafo. Veamos un ejemplo en donde ahora Visitados guarda 0, 1, o 2
    para representar los 3 estados.
    <h4>
    bool DFS(int Nodo){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Visitados[Nodo] = 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;bool r = 0;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(auto E: Grafo[Nodo]){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(Visitados[E] == 1) return 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(Visitados[E] == 0) r = r or DFS(E);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Visitados[Nodo] = 2;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return r;<br>
    }<br>
    </h4>
    <h3>Camino más corto</h3>
    Con la búsqueda en anchura podemos determinar el camino más corto entre un nodo y todos los 
    demás nodos en un grafo no ponderado y las longitudes de cada uno de esos caminos. 
    Para hacerlo solo hay que guardar en un arreglo el nodo 
    anterior a cada nodo, este nodo será el nodo que está siendo revisado cuando un nodo es añadido
    a la fila. La distancia del nodo inical a ese nodo será la distancia a su nodo anterior más 1.
    Veamos un ejemplo:
    <h4>
    &nbsp;&nbsp;&nbsp;&nbsp;deque&lt;int&gt; Fila = {0};<br>
    &nbsp;&nbsp;&nbsp;&nbsp;deque&lt;int&gt; Distancias(n, 0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;deque&lt;int&gt; Anteriores(n, -2);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;while(!Fila.empty()){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int Nodo = Fila[0];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fila.pop_front();<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visitados[Nodo] = 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(auto E: Grafo[Nodo]){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!Visitados[E]){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fila.push_back(E);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visitados[E] = 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anteriores[E] = Nodo;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Distancias[E] = Distancias[Nodo] + 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    </h4>
    Para recuperar el camino empezaremos del nodo del final, cuando estemos en un nodo lo guardamos
    y pasamos al anterior hasta llegar al nodo inicial.
    <h4>
    &nbsp;&nbsp;&nbsp;&nbsp;deque&lt;int&gt; Camino;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 7; i != -2; i = Anteriores[i]){ //Al inicio creamos el deque de anteriores con puros -2 y nunca modificamos el nodo anterior del nodo inicial, es por eso que sabemos que si i es igual a -2 ya habremos terminado.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camino.push_front(i);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    </h4>
    La complejidad de ambos algoritmos es de O(n + e) en donde n es el número de nodos y e es el número 
    de aristas.
    </div>
</body>
</html>