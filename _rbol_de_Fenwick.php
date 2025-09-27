<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Árbol de Fenwick</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>Árbol de Fenwick.</h1>
    Como vimos antes, sacar la suma de un subarreglo eficientemente es fácil con una suma de prefijos, ¿pero qué
    pasaría si se tuviera que modificar algún valor del arreglo? Tendríamos que modificar todos los valores
    de la suma de prefijos que estén en esa posición y después para poder seguir respondiendo consultas. Esto 
    causa que la suma de prefijos sea lenta si se modifican muchos valores. <br>
    El árbol de Fenwick es un poco más lento respondiendo a consultas con una complejidad logarítmica, pero puede 
    actualizar elementos mucho más rápidamente con una complejidad logarítmica.
    <h3>¿Cómo funciona?</h3>
    Básicamente hacemos que cada elemento de un arreglo guarde la suma de un rango específico del arreglo del cual 
    se quiere construir el árbol de Fenwick como se puede ver en la imagen. <br>
    <img src="Fotos/_rbol_de_Fenwick.png" alt="No se pudo cargar la imagen." class="_rbol_de_Fenwick">
    <h3>Creación</h3>
    No hay que preocuparse de tratar de pensar mucho en cómo crear los rangos porque también existe 
    la operación LSOne para ayudarnos. En C++ la podemos crear con una función que convierta a n en n & -n.
    La creación consiste en que tenemos un arreglo que NECESARIAMENTE debe empezar en la posición 1 (así que
    dejaremos la posición 0 vacía) e iteraremos sobre el arreglo del cual queremos obtener su árbol de Fenwick.
    Para simplicidad llamaremos al arreglo a y al árbol lo llamaremos f. Cuando estamos en la posición i de a, 
    añadimos a[i] a f[i + 1] y a f[i + 1 + LSOne(i + 1)] si es que esta posición existe en f.
    <h3>Consultas</h3>
    Para hacer
    consultas de sumas del rango [i, j] nos aseguramos de que i sea 0 (caso contrario, la respuesta a la
    consulta será la consulta del rango [0, j] menos la respuesta del rango [0, i - 1]). Nosotros empezamos
    con un contador que empieza en 0 y un índice que empieza en j + 1. Iremos añadiendo el valor de f[Índice] 
    a contador y restando LSOne(Índice) a Índice hasta que se vuelva 0 (en cuyo caso, habremos terminado).
    <h3>Actualizaciones</h3>
    Para 
    reemplazar un valor de a[i] por v, obtendremos v - a[i], sumaremos 1 a i e iremos sumando esta diferencia 
    a todos los valores de f[i], i debe aumentar en LSOne(i) tras aumentar un valor. Veamos un ejemplo de 
    implementación:
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int LSOne(int n){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return n & -n;<br>
    }<br>
    deque&lt;int&gt; _rbol, Arreglo;<br>
    void Crear(){ //Usamos & para que pase los elementos más rápido.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;int n = Arreglo.size();<br>
    &nbsp;&nbsp;&nbsp;&nbsp;_rbol.assign(n + 1, 0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; n; i++){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_rbol[i + 1] += Arreglo[i];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(i + 1 + LSOne(i + 1) &lt;= n) _rbol[i + 1 + LSOne(i + 1)] += _rbol[i + 1];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    }<br>
    int Consulta(int i, int j){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(i &gt; 0) return Consulta(0, j) - Consulta(0, i - 1);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;int Respuesta = 0;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(j++; j &gt; 0; j -= LSOne(j)) Respuesta += _rbol[j];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return Respuesta;<br>
    }<br>
    void Actualizar(int i, int v){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;int Suma = v - Arreglo[i];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Arreglo[i] = v; //No olvidemos también modificar el valor del arreglo original para poder hacer futuras actualizaciones.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(i++; i &lt;= Arreglo.size(); i += LSOne(i)) _rbol[i] += Suma;<br>
    }<br>
    int main(){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Arreglo = {4, -287, 27, 8, -12, 228, 7, -25, -6, 17, -45, 12, 127, 98, -34, 0, 283};<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Crear();<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;Consulta(4, 6)&lt;&lt;"\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Actualizar(5, -3);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;Consulta(4, 6)&lt;&lt;"\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Actualizar(5, 0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;Consulta(4, 6)&lt;&lt;"\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    }
    </h4>
    Como ya se mencionó, las consultas y las actualizaciones en el árbol de Fenwick tienen complejidad O(log n)
    donde n es el tamaño del arreglo original y su creación se hace en O(n). Esto es mucho más rápido que 
    una suma de prefijos porque, si bien su creación es igual de eficiente y sus consultas son más eficientes,
    sus actualizaciones se hacen con una complejidad de O(n). Ten en cuenta que el árbol de Fenwick requiere que 
    la operación que se esté haciendo tenga un inverso al igual que la suma de prefijos.
    </div>
</body>
</html>