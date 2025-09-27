<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Árbol de segmentos</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>Árbol de segmentos.</h1>
    El árbol de segmentos es una estructura de datos que permite responer a consultas en rangos de un arreglo. <br>
    Las ventajas que tiene sobre el árbol de Fenwick son que no reuiere que la operación que haga tenga un inverso 
    y puede hacer actualizaciones en rangos en lugar de solo elementos individuales y las ventajas que tiene sobre 
    la mesa dispersa son que ocupa menos memoria y que puede actualizarse. <br>
    La desventaja que tiene frente al árbol de Fenwick es que ocupa más memoria y la desventaja que tiene frente 
    a la mesa dispersa es tener consultas más lentas.
    <h3>¿Cómo funciona?</h3>
    El árbol de segmentos funciona combinando las respuestas de segmentos de tamaños cada vez mayores para así 
    poder responder a consultas combinando segmentos ya calculados. Sus actualizaciones son rápidas porque 
    al actualizar un valor o valores solo hay que modificar los segmentos que usan el o los valores modificados 
    en lugar de todos los segmentos. <br>
    <img src="Fotos/_rbol_de_segmentos.png" alt="No se pudo cargar la imagen" class="_rbol_de_segmentos">
    <h3>Creación</h3>
    Primero necesitamos el arreglo original al que llamaremos a y un arreglo que represente el árbol de segmentos 
    que llamaremos _rbol (en C++ las varibles no pueden tener nombres con algunos caracteres como letras con tilde)
    que tenga una longitud de 4 veces la longitud de a (aunque siempre es mejor poner un poquito más para evitar 
    posibles problemas tratando de acceder a una posición inexistente). <br>
    Para crearlo usaremos una función recursiva que retorne void que tendrá 3 parámetros: el inicio del rango actual que llamaremos i,
    el final del rango actual (que llamaremos d) y la posición en el arreglo que usaremos para representar al 
    árbol que llamaremos p. Llamaremos a esta función con Crear(0, a.size() - 1, 1) cuando queramos crear el árbol 
    de segmentos. <br>
    Si estamos en un rango de longitud 1, damos la instrucción _rbol[p] = a[i]; para que ese lugar del árbol tenga 
    la respuesta a ese rango y retornamos. Si no estamos en un rango de longitud uno creamos una variable Promedio 
    que guarde (i + d) / 2 (C++ lo redondeará solo) y llamamos a la función 2 veces, una vez con (i, Promedio, p * 2)
    y otras vez con (Promedio + 1, d, p * 2 + 1). Esto logrará que se calculen las respuestas de los 2 segmentos que 
    se combinarán para formar el segmento actual y solo nos quedará calcular Operación(_rbol[p * 2], _rbol[p * 2 + 1])
    para obtener la respuesta de nuestro rango actual. <br>
    Veamos un ejemplo de esta función si es que asumimos que a y _rbol están como deques globales, a ya tiene todos 
    sus elementos, _rbol ya tiene el tamaño asignado y queremos responder a consultas de sumas: <br>
    <h4>
    void Crear(int i, int d, int p){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(i == d){ //Si el inicio es igual al final, significa que nuestro segmento tiene longitud 1.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_rbol[p] = a[i];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;int Promedio = (i + d) / 2;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Crear(i, Promedio, p * 2);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Crear(Promedio + 1, d, p * 2 + 1);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;_rbol[p] = _rbol[p * 2] + _rbol[p * 2 + 1]; <br>
    }<br>
    <h3>Consultas</h3>
    Para responder consultas debemos combinar los rangos que tenemos de manera eficiente. Para ello bajaremos por 
    el árbol de manera similar a la manera en la que lo creamos. <br>
    Usaremos una función recursiva con los parámetros i, d, p, I y D. i, d y p representan lo mismo que en la función 
    de creación e I y D representan el inicio y el final del rango al que le haremos la consulta. <br>
    La función retornará _rbol[p] si el rango actual está completamente contenido en el rango de consulta, retornará 
    el elemento neutro de la operación si el rango actual está completamente fuera del rango de consulta y, creando 
    una variable Promedio que sea igual a (i + d) / 2, retornará Operación(Consulta(i, Promedio, p * 2, I, D),
    Consulta(Promedio + 1, d, p * 2 + 1, I, D)) si es que no se cumplen los 2 casos posibles anteriores. Para usar 
    esta función la llamaremos con Consulta(0, a.size() - 1, 1, Inicio_del_rango_consultado, Final_del_rango_consultado) y 
    el valor que retorne esta función en el código será la respuesta a la consulta.
    <h4>
    int Consulta(int i, int d, int p, int I, int D){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(i &gt;= I and d &lt;= D) return _rbol[p]; //Vemos si nuestro rango actual está contenido en el rango de consulta.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(i &gt; D or d &lt; I) return 0; //Vemos si nuestro rango está fuera del rango de consulta.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;int Promedio = (i + d) / 2;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return Consulta(i, Promedio, p * 2, I, D) + Consulta(Promedio + 1, d, p * 2 + 1, I, D);<br>
    }<br>
    </h4>
    <h3>Actualizaciones</h3>
    Para actualizar un solo elemento de un árbol de segmentos se necesita hacer una función similar a la de 
    consulta, solo que también necesita el parámetro de la modificación. Para usar esta función en el código la 
    llamaremos con Actualizar(0, a.size() - 1, 1, Inicio_del_rango_actualizado, Final_del_rango_actualizado, Valor_para_a_adir). Asumiendo que la modificación que haremos 
    es sumar un número a un elemento la función de actualización es:
    <h4>
    void Actualizar(int i, int d, int p, int I, int D, int v){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(i &gt;= I and d &lt;= D){//Vemos si nuestro rango actual está contenido en el rango de consulta.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_rbol[p] += v;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(i &gt; D or d &lt; I) return; //Vemos si nuestro rango está fuera del rango de consulta.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;int Promedio = (i + d) / 2;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Actualizar(i, Promedio, p * 2, I, D, v);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Actualizar(Promedio + 1, d, p * 2 + 1, I, D, v);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;_rbol[p] = _rbol[p * 2] + _rbol[p * 2 + 1];<br>
    }<br>
    </h4>
    Pero una de las ventajas del árbol de segmentos es que permite hacer actualizaciones en rangos y no solo elementos 
    individuales, es por eso que en la función de actualizar se dejó a los parámetros como I y D en lugar de solo
    ser una única variable que representa la única posición a actualizar. Para actualizar rangos usaremos una
    técnica llamada propagación floja que consiste en aplicar el cambio a todo un rango si llegamos a este y solo 
    modificar los valores que le siguen en el árbol si es que es necesario.
    <h3>Propagación floja</h3>
    Crearemos un arreglo que tenga el mismo tamaño que _rbol y lo llamaremos Propagando. Este debe estar lleno de 
    elementos neutros de la operación de actualización o elementos que se sabe que no podrán ser posibles en
    circunstancias normales en caso de que la operación no tenga un elemento neutro (por ejemplo, si la operación
    es cambiar todos los valores de un rango por uno en específico y el problema dice que solo se usarán números 
    positivos, puedes llenar Propagando con algún número negativo para saber que ahí no se está guardando algo 
    que se deba propagar).<br>
    También usaremos una función llamada Propagar que tendrá los párametros i, d y p (que representan lo mismo
    que los i, d y p de la función que crea el árbol de segmentos). Esta función aplicará la operación que tenga 
    Propagando[p] almacenada si hay alguna a _rbol[p] y verá si i es deferente a d. En caso de que i sí sea
    diferente a d, ejecutará las órdenes Propagando[p * 2] = Operación de actualización(Propagando[p * 2], 
    Propagando[p]); y Propagando[p * 2 + 1] = Operación de actualización(Propagando[p * 2 + 1], 
    Propagando[p]); para que se sepa que hay que aplicar esta operación a los segmentos que conforman a nuestro segmento 
    actual. Al final del proceso siempre se debe cambiar Propagando[p] por un valor que nos permita saber que ahí ya no 
    hay algo que propagar. La función se vería así:
    <h4>
    void Propagar(int i, int d, int p){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;_rbol[p] += Propagando[p] * (d - i + 1); //Si no usas el elemento neutro, verifica que 
    Propagando[p] tenga algo que propagar antes de ejecutar una orden como esta.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(i != d){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Propagando[p * 2] += Propagando[p];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Propagando[p * 2 + 1] += Propagando[p];<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Propagando[p] = 0; //Aquí podrías necesitar otro valor.<br>
    }<br>
    </h4>
    Esta función tendrá que ser llamada al inicio de Consulta y Actualizar, Actualizar también se ve un poco diferente 
    con el uso de esta función. Se verían así:
    <h4>
    int Consulta(int i, int d, int p, int I, int D){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Propagar(i, d, p);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(i &gt;= I and d &lt;= D) return _rbol[p]; //Vemos si nuestro rango actual está contenido en el rango de consulta.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(i &gt; D or d &lt; I) return 0; //Vemos si nuestro rango está fuera del rango de consulta.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;int Promedio = (i + d) / 2;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return Consulta(i, Promedio, p * 2, I, D) + Consulta(Promedio + 1, d, p * 2 + 1, I, D);<br>
    }<br>
    void Actualizar(int i, int d, int p, int I, int D, int v){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Propagar(i, d, p);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(i &gt;= I and d &lt;= D){//Vemos si nuestro rango actual está contenido en el rango de consulta.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Propagando[p] += v; //Aquí es en donde cambia un poco.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Propagar(i, d, p);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(i &gt; D or d &lt; I) return; //Vemos si nuestro rango está fuera del rango de consulta.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;int Promedio = (i + d) / 2;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Actualizar(i, Promedio, p * 2, I, D, v);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Actualizar(Promedio + 1, d, p * 2 + 1, I, D, v);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;_rbol[p] = _rbol[p * 2] + _rbol[p * 2 + 1];<br>
    }<br>
    </h4>
    La complejidad de creación del árbol de segmentos de un arreglo de tamaño n es O(n) y la complejidad por cada 
    consulta es O(log n). Ten en cuenta que el árbol de segmentos no se puede usar con algunas operaciones. La operación 
    de cada rango que guarda el árbol de segmentos debe ser asociativa y la operación de actualización debe ser 
    distribuible sobre la operación de los rangos.
    </div>
</body>
</html>