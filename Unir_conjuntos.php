<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unión de conjuntos disjuntos</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>UNIÓN DE CONJUNTOS DISJUNTOS</h1>
    Esta es un estructura de datos que nos permite saber de manera eficiente el componente conexo en el 
    que está un nodo y el tamaño de ese componente permitiendo actualizaciones en las que se unen 
    dos nodos con una arista.
    <h3>¿Cómo funciona?</h3>
    Para cada nodo guarda un representante del componente conexo y el tamaño de ese componente.
    <h3>Creación</h3>
    Creamos un deque que llamaremos r en donde cada nodo empiece siendo su propio representante y 
    otro deque t de números 1 para representar que cada componente conexo es de tamaño 1.
    <h4>
    deque&lt;int&gt; r, t;<br>
    void Crear(int n){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;r.assign(n, 0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;t.assign(n, 1);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 1; i &lt; n; i++) r[i] = i;<br>
    }<br>
    </h4>
    <h3>Consultas</h3>
    Cuando queramos saber el representante de un nodo usaremos una función recursiva que solo tendrá 
    un parámetro que será el nodo actual a la que llamaremos con nuestro nodo de consulta. Esta 
    función retornará el nodo actual si es su propio representante y retornará la función llamando 
    al representante del nodo actual si no es así, luego cambiará al representante del nodo actual 
    por el nodo obtenido de la consulta. Veamos cómo hacer esto.
    <h4>
    int Buscar(int a){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(r[a] == a) return a;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return r[a] = Buscar(r[a]); //Así también modificaremos el representante de cada nodo por el que pasemos.<br>
    }<br>
    Para saber el tamaño del componente conexo de un nodo, solo usamos t[Buscar(Nodo)].
    </h4>
    <h3>Uniones</h3>
    Para unir 2 nodos veremos si sus representantes son los mismos para ver si ya pertenecen al mismo 
    componente conexo o no. Si es que no tienen el mismo representante, uniremos el componente 
    conexo más pequeño al componente conexo más grande. Para ello solo sumaremos los tamaños de los 
    componentes conexos y cambiaremos el representante del componente 
    conexo más pequeño por el representante del componente conexo más grande.
    <h4>
    void Unir(int a, int b){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;a = Buscar(a);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;b = Buscar(b);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(a != b){ //Vemos si sus representantes son diferentes.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(t[a] &gt;= t[b]){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t[a] += t[b];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r[b] = a;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t[b] += t[a];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r[a] = b;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    }<br>
    </h4>
    La complejidad de la creación de esta estructura de datos es O(n) donde n 
    es la cantidad de nodos y la complejidad de cada operación es O(1) en práctica, pero más 
    exactamente es O(&alpha;(n)), pero &alpha; es la función inversa de la función de 
    Ackermann y crece de manera extremadamente lenta (no debería ser mayor que 4).
    </div>
</body>
</html>