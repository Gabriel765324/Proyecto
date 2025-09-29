<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceptos de grafos</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>GRAFOS</h1>
    Los grafos son conjuntos de nodos que se pueden unir con aristas. Puedes pensar el nodos como si 
    fueran ciudades y en las aristas como las carreteras que unen esas ciudades. En los problemas de 
    grafo te pueden pedir varias cosas para hacer en en grafo como hallar distancias entre nodos
    ver alguna manera de unir o separar nodos para lograr que algo se cumpla, etcétera.<br>
    En esta página veremos algunos conceptos que te servirán. <br>
    <h3>Grafo no dirigido</h3>
    Son grafos en donde todas sus aristas son bidireccionales, o sea que se pueden recorrer en 
    sus 2 sentidos.
    <h3>Grafo dirigido</h3>
    Son grafos en donde todas sus aristas son unidireccionales, o sea que se pueden recorrer en 
    solo 1 de sus sentidos.
    <h3>Grafo no ponderado</h3>
    Un grafo en donde las aristas no tienen un peso asignado.
    <h3>Grafo ponderado</h3>
    Son grafos en donde cada una de las aristas tiene pesos, algo así como un costo de usarse o 
    una longitud que tienen. <br>
    <img src="Fotos/Tipos_de_grafos.png" alt="No se pudo cargar la imagen." class="Tipos_de_grafos">
    <h3>Componente conexo</h3>
    Es un subconjunto de nodos de un grafo no dirigido en donde se puede viajar entre cada par de nodos 
    usando solo aristas que unen nodos del componente y no pertenece a otro componente fuertemente 
    conexo más grande.
    <h3>Camino</h3>
    Es una lista de nodos a<sub>0</sub>, a<sub>1</sub>, ..., a<sub>n - 1</sub> en donde los nodos 
    a<sub>i</sub> y a<sub>i - 1</sub> están unidos por una arista.
    <h3>Camino simple</h3>
    Un camino en donde ningún nodo se repite con excepción del primero nodo y el último nodo que 
    pueden o no ser el mismo.
    <h3>Ciclo</h3>
    Un camino simple en donde el primer y el último nodo coinciden.
    <h3>Árbol</h3>
    Es un grafo no dirigido conexo sin ciclos. Este siempre tiene n - 1 aristas en donde n es la 
    cantidad de nodos.
    <h3>Raíz</h3>
    Es un nodo especial definido por nosotros.
    <h3>Distancia</h3>
    La mínima cantidad de aristas que se necesitan para ir de un nodo a otro.
    <h3>Altura</h3>
    La distancia máxima entre la raíz y un nodo del árbol.
    <h3 id="DDDD">Diámetro</h3>
    Si consideramos las longitudes de todos los caminos más cortos entre todos los pares de nodos de 
    un grafo no dirigido, el diámetro del grafo es igual a la mayor de esas longitudes.
    <h3>Vecino</h3>
    Un nodo conectado directamente por una arista a otro nodo.
    <h3>Representación de grafos</h3>
    En C++ tenemos 3 opciones a la hora de representar grafos: la lista de aristas, la lista de adyacencia 
    y la matriz de adyacencia, pero aquí solo se usará la lista de adyacencia porque las otras 2 
    harán que la complejidad de los códigos aumente sin ofrecer ventaja alguna. <br>
    La lista de adyacencia su puede representar con un deque de deques en done el valor de Lista[i][j] 
    representa que hay una arista que une i y Lista[i][j]. También podemos guardar pares en estas posiciones 
    si queremos representar un grafo ponderado. Veamos un código al que se le da una lista de aristas 
    y representa ese grafo como una lista de adyacencia: <br>
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;int n, m; //n será el número de nodos y m será el número de aristas.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cin&gt;&gt;n&gt;&gt;m;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;deque&lt; deque&lt;int&gt; &gt; Grafo(n);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; m; i++){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int a, b;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cin&gt;&gt;a&gt;&gt;b;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grafo[a].push_back(b);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grafo[b].push_back(a); //Esa línea se debería ejecutar solo cuando el grafo no es dirigido.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    }
    </h4>
    </div>
</body>
</html>