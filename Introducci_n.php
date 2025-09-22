<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducción.</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <br><br><br><br>
    <div style="padding: 10px;">
    <center><h1 class="Ttulo">INTRODUCCIÓN.</h1></center>
    Bienvenido/a a compitiendo junto a C++, en esta página podrás aprender sobre temas que te ayudarán a
    aprender a usar C++ en programación competitiva.
    <h3>¿Qué es C++?</h3>
    Es el lenguaje de programación que usaremos a lo largo de este curso. <br>
    <h3>¿Qué es la programación competitiva?</h3>
    Es una disciplina en la que se tienen que resolver problemas usando algoritmos eficientes tanto en
    memoria como en tiempo.
    <h3>¿Cómo veo si mi código es eficiente?</h3>
    La notación big O permite medir la complejidad de tiempo y memoria de tu código, aunque esta 
    última no suele ser un problema. La notación big O permite saber aproximadamente cuántas
    operaciones hará tu código con relación a la entrada que se le da. Este describe esto como función. <br>
    Por ejemplo, si sumas todos los números de 1 a N uno por uno, la complejidad 
    es O(N), pero si usas la fórmula N(N + 1) / 2, la complejidad es O(1). <br>
    Ten en cuenta que cada coeficiente es reemplazado por 1. Por ejemplo, si sumas todos
    los números de 1 a 1000 * N uno por uno, la complejidad es O(N), no O(1000 * N). <br>
    También debes saber que se toma en cuenta cada variable que se use. Por ejemplo, si sumas todos los 
    números de 1 a N y al resultado le sumas todos los números de 1 a M uno por uno, la complejidad es
    O(N + M). <br>
    Para terminar, si tienes algún polinomio, solo usa el término con grado mayor. Por ejemplo, O(4 * N² + N * 5
    + M² + 10 * M + 3 * N * 2ᴺ) debería escribirse solo como O(N² + M² + N * 2ᴺ).
    Una vez tengas esto, reemplaza los valores máximos de la entrada en la función. Los códigos suelen
    no pasarse del tiempo límite si este valor es menor que 10⁸, aunque puede variar un poco dependiendo 
    del tiempo límite del problema.
    <table border="2">
        <tr><th>Complejidad.</th><th>Tamaño de la entrada máximo con el que suele funcionar aproximadamente.</th></tr>
        <tr><td>O(2ᴺ)</td><td>20</td></tr>
        <tr><td>O(N⁴)</td><td>50</td></tr>
        <tr><td>O(N³)</td><td>200</td></tr>
        <tr><td>O(N²)</td><td>5000</td></tr>
        <tr><td>O(N√N)</td><td>100000</td></tr>
        <tr><td>O(Nlog²N)</td><td>200000</td></tr>
        <tr><td>O(NlogN)</td><td>1000000</td></tr>
        <tr><td>O(N)</td><td>10000000</td></tr>
    </table>
    <h3>Lo básico.</h3>
    Para poder crear tus códigos de C++ y ejecutarlos necesitarás un editor de código y un compilador,
    hay varios que se pueden descargar desde el internet y hay algunos como
    <a href="https://www.onlinegdb.com/">Online GDB</a> que funcionan en línea.
    Lo que debería tener tu código de C++ al inicio es esto: <br>
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    } 
    </h4>
    #include: Sirve para incluir la librería que contiene las funciones que se usarán, pero bits/stdc++.h
    tiene una gran mayoría de las librerías que necesitarás.<br>
    using namespace std: Sirve para evitar tener que escribir std:: antes de algunas cosas que normalmente
    lo requieren. <br>
    int main(): Aquí empieza la función principal, esta es la primera que se ejecuta cuando se ejecuta el
    código. El contenido de la función debe ir encerrado entre llaves. <br>
    ios_base::sync_with_stdio(0) y cin.tie(0): Son líneas que permiten usar la entrada y salida rápida, pero
    no permiten ver la salida en tiempo real, solo cuando se termina de ejecutar el código. Puedes quitar estas
    líneas si es que estás probando tu código, pero si quieres ver lo que está haciendo tu código es mejor usar
    cerr (explicación más abajo). <br>
    return 0: Esta línea hace que la función retorne 0, poder retornar valores no es muy útil con la
    función principal, pero servirá cuando creemos nuestras propias funciones. <br>
    <h3>¿Para qué sirve usar ";"?</h3>
    El ";" debe ser usado al final de la mayoría de instrucciones en C++, no hacerlo hará que el
    código no se compile correctamente; en el curso podrás ver cuando haya que hacerlo.
    <h3>¿Para qué sirve usar "//" y "/* */"?</h3>
    Sirven para hacer comentarios, estos no se ejecutan y puedes poner palabras para hacer cosas 
    como tener un recordatorio de lo que estás haciendo. "//" hace que todo lo que está después 
    hasta el final de la línea sea un comentario y "/* */" hace que todo lo que esté entre "/*" y 
    "*/" sea un comentario.
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;//Esto es un comentario.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;/*Esto es un comentario.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;Esto también es un comentario.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return 0; No se ejectua esto.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;Esto sigue siendo un comentario.*/<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    } 
    </h4>
    <h3>Operaciones</h3>
    <table border="2">
        <tr><th>Operación.</th><th>Lo que hace.</th></tr>
        <tr><td>a + b</td><td>Suma a y b si son números o concatena a y b si son cadenas o caracteres.</td></tr>
        <tr><td>a - b</td><td>Resta a y b.</td></tr>
        <tr><td>a * b</td><td>Multiplica a y b.</td></tr>
        <tr><td>a / b</td><td>Divide a y b.</td></tr>
        <tr><td>a % b</td><td>Obtiene el residuo de a / b.</td></tr>
        <tr><td>a &lt;&lt; b</td><td>Obtiene a * (2 elevado a b).</td></tr>
        <tr><td>a &gt;&gt; b</td><td>Obtiene a / (2 elevado a b).</td></tr>
        <tr><td>a & b</td><td>Transforma a y b a binario, aplica la operación <a href="https://es.wikipedia.org/wiki/Puerta_AND">AND</a>
        a cada bit y transforma el valor obtenido a decimal.</td></tr>
        <tr><td>a | b</td><td>Transforma a y b a binario, aplica la operación <a href="https://es.wikipedia.org/wiki/Puerta_OR">OR</a>
        a cada bit y transforma el valor obtenido a decimal.</td></tr>
        <tr><td>a ^ b</td><td>Transforma a y b a binario, aplica la operación <a href="https://es.wikipedia.org/wiki/Puerta_XOR">XOR</a>
        a cada bit y transforma el valor obtenido a decimal.</td></tr>
        <tr><td>a and b</td><td>Da 1 si a y b son verdaderos y da 0 en otro caso. (Cualquier cosa
        que no sea 0 se considera verdadero).</td></tr>
        <tr><td>a or b</td><td>Da 0 si a y b son falsos y da 1 en otro caso.</td></tr>
        <tr><td>a == b</td><td>Da 1 si a y b son iguales y da 0 si no lo son.</td></tr>
        <tr><td>a != b</td><td>Da 0 si a y b son iguales y da 1 si no lo son.</td></tr>
        <tr><td>!a</td><td>Da 1 si a es falso y da 0 si a es verdadero.</td></tr>
    </table>
    <h3>Variables</h3>
    En C++ se pueden crear variables locales declarándolas dentro de una función, que solo se pueden usar
    dentro de esa función, y variables globales, que se colocan afuera de las funciones y se pueden usar
    en cualquier función. Para declararlas se escribe el tipo de dato y el nombre de la variable.
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int Entero_global = 2;<br>
    int main(){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;int Entero = 2;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;double Real = 2.2222;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;string Cadena = "Hola";<br>
        &nbsp;&nbsp;&nbsp;&nbsp;char Caracter = 'B';<br>
        &nbsp;&nbsp;&nbsp;&nbsp;auto Un_int = 5;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;auto Un_char = '5';<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    } 
    </h4>
    <center><table border="2">
        <tr><th>Tipo de dato.</th><th>Lo que guarda.</th></tr>
        <tr><td>int</td><td>Números enteros en el rango [-2147483648, 2147483647]</td></tr>
        <tr><td>long long</td><td>Números enteros en el rango [-9223372036854775808, 9223372036854775807]</td></tr>
        <tr><td>float</td><td>Números racionales en el rango [−3.4×10^38, 3.4×10^38] aproximadamente, pero con alrededor
            de 7 dígitos de precisión.
        </td></tr>
        <tr><td>double</td><td>Números racionales en el rango [1.8×10^308, 1.8×10^308] aproximadamente, pero con alrededor
            de 15 dígitos de precisión.</td></tr>
        <tr><td>char</td><td>Cualquier caracter del <a href="https://elcodigoascii.com.ar/">código ASCII</a>, pero ten 
            cuidado con los caracteres del código ASCII extendido.</td></tr>
        <tr><td>string</td><td>Cadenas de caracteres.</td></tr>
        <tr><td>bool</td><td>Verdadero o falso.</td></tr>
        <tr><td>Estructura&lt;Tipo de dato&gt;::iterator</td><td>Una posición de una estructura de datos.</td></tr>
        <tr><td>auto</td><td>Cualquier cosa que se pueda guardar en otro tipo de dato.</td></tr>
    </table></center>
    Para cambiar el valor de una variable se usa el signo =. Con valores numéricos se 
    puede usar +=, -=, *=, /=, ++ y --. Con cadenas se puede usar +=.<br>
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;int a = 2;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;a&lt;&lt;"\n"; //Imprime 2.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;a = 3; //El valor de a se vuelve 3.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;a&lt;&lt;"\n"; //Imprime 3.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;a += 3; //El valor de a se aumenta en 3.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;a&lt;&lt;"\n"; //Imprime 6.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;a -= 3; //El valor de a se reduce en 3.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;a&lt;&lt;"\n"; //Imprime 3.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;a *= 3; //El valor de a se multiplica por 3.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;a&lt;&lt;"\n"; //Imprime 9.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;a /= 3; //El valor de a se divide entre 3.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;a&lt;&lt;"\n"; //Imprime 3.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;a++; //El valor de a se aumenta en 1 y se vuelve 4.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;a&lt;&lt;"\n"; //Imprime 3.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;a--; //El valor de a se reduce en 1 y se vuelve 3.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;a&lt;&lt;"\n"; //Imprime 3.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;string b = "Hola";<br>
        &nbsp;&nbsp;&nbsp;&nbsp;b += "Cadena"; //La cadena b se con "Cadena". Esto la vuelve "HolaCadena"<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;b&lt;&lt;"\n"; //Imprime "HolaCadena"<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    } 
    </h4>
    Ten en cuenta que al hacer divisiones con enteros el resultado se redondeará hacia abajo si la
    división no es exacta.
    <h3>Entrada y salida</h3>
    Con cin puedes leer datos desde la entrada estándar y con cout puedes imprimir datos a la salida estándar. <br>
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;int a;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin&gt;&gt;a; //Lee a.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;a * 2<<" Hola."; //Imprime el doble de a y la cadena " Hola.".<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    } 
    </h4>
    También puedes usar freopen para leer y/o escribir en archivos, no puedes usar la entrada y salida rápida
    si haces esto. <br>
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;freopen("Entrada.txt", "r", stdin); //Lee la entrada desde
        el archivo Entrada.txt.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;freopen("Salida.txt", "w", stdout); //Imprime la salida en
        el archivo Salida.txt. Si no encuentra este archivo, crea el archivo Salida.txt
        para pode imprimir ahí la salida.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;int a;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin&gt;&gt;a; //Lee a de Entrada.txt.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;a * 2<<" Hola."; //Imprime esto en el archivo Salida.txt.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    } 
    </h4>
    Con cerr se pueden "imprimir" cosas, este las imprime en la consola cuando se les da la
    instrucción, incluso si se usa la entrada y salida rápida o se está imprimiendo en un
    archivo. Es útil para buscar errores en tu código. Ten en cuenta que usarlo no se toma 
    en cuenta para evaluar tu solución en jueces modernos, pero sí podría causar que tu 
    respuesta no se considere correcta con jueces más antiguos.<br>
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;int a;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin&gt;&gt;a;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;a * 2<<" Hola.";<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cerr&lt;&lt;a * 5<<" Hola."; //En la consola verás esta salida primero
        porque se está usando la entrada y salida rápida.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    } 
    </h4>
    Con getline se puede hacer que se lea toda una línea como cadena, es útil para poder leer cadenas con
    espacios desde la entrada. Siempre tienes que colocar cin.ignore() si usaste cin antes que getline
    en alguna parte del código.<br>
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;int a;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin&gt;&gt;a;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;string b;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin.ignore();<br>
        &nbsp;&nbsp;&nbsp;&nbsp;getline(cin, b); //Entre los paréntesis siempre se coloca
        cin, [el nombre de la cadena]<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;a<<" "&lt;&lt;b;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    }
    </h4>
    Si quieres poner un salto de línea en la salida, usa "\n" (También puedes poner otras cosas
    dentro de las comillas, por ejemplo "\nHola\n" imprime un salto de línea, la palabra Hola
    y otro salto de línea) o endl (solo si estás en un problema interactivo que usa la entrada
    y salida estándar porque es más lento que "\n").
    <h3>Condicionales</h3>
    Hay condicionales permiten que ciertas partes del código solo se ejecuten si se cumple
    o no se cumple una condición y hay uno que puede tomar valores dependiendo de si se cumple una 
    condición o no.
    if(Condición): Ejecuta una parte del código si se cumple una condición.
    else: Ejecuta una parte del código si no se cumple una condición. Solo se puede usar después 
    de un if.
    else if(Condición): Ejecuta una parte del código si no se cumple una condición dada antes por un if
    y se cumple la condición dada por el if actual.
    ((Condición) ? Valor1 : Valor2): Si se cumple la condición, el valor de esta expresión se 
    convertirá en Valor1, si no se cumple, esta expresión se convertirá en Valor2. Valor1 y Valor2
    deben ser del mismo tipo de dato.
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;int a, b;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin&gt;&gt;a&gt;&gt;b;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;if(a == b){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"Son iguales";<br>
        &nbsp;&nbsp;&nbsp;&nbsp;} else if(a > b){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"a es mayor que b";<br>
        &nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"a es menor que b";<br>
        &nbsp;&nbsp;&nbsp;&nbsp;} <br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;((a % 2 == 0) ? "\na es par." : "\na es impar.");<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    }
    </h4>
    Ten en cuenta que las variables creadas dentro de if, else y else if no se pueden usar fuera de
    estos.
    También es posible usar condicionales if, else y else if sin las llaves, pero esto hará que 
    solo ejecuten la primera orden que vean si se cumple su condición.
    <h3>Bucles</h3>
    Los bucles en C++ son while, for y do while. <br>
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;int a = 0;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;while(a < 5){ //Repite mientras se cumpla la condición. <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;a&lt;&lt;"\n"; //Imprime a. <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a++;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;} <br>
        &nbsp;&nbsp;&nbsp;&nbsp;for(int b = 1; b < 5; b++){ //Primero ejecuta la instrucción de la izquierda,
        luego se ejecuta mientras se cumpla la condición del centro y al final de cada repetición ejecuta
        la instrucción de la derecha. <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;b&lt;&lt;"\n"; <br>
        &nbsp;&nbsp;&nbsp;&nbsp;} <br>
        &nbsp;&nbsp;&nbsp;&nbsp;a = 0;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;do{<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;a&lt;&lt;"\n";<br>
        &nbsp;&nbsp;&nbsp;&nbsp;} while(a < 5); Es como while, pero primero se ejecuta lo que está dentro
        de do antes de ver si se cumple la condición.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    } 
    </h4>
    Ten en cuenta que no puedes usar variables creadas en bucles fuera de esos bucles. También 
    es posible usar bucles sin llaves, pero solo ejecutarán la primera orden que vean durante 
    cada repetición.
    <h3>Estructuras de datos</h3>
    Las estructuras de datos de C++ nos permiten almacenar varios valores e includo otras estructuras de
    datos. Estas son algunas estructuras de datos. <br>
    <h3>Vector y deque</h3>
    Estos permiten guardar, eliminar y añadir elementos, también tienen funciones para ordenarlos de
    manera automática y buscar elementos si ya están ordenados. Vector y deque son casi lo mismo,
    pero deque tiene la ventaja de que puede añadir y eliminar elementos al inicio más eficientemente
    que vector. Se crean escribiendo "vector&lt;Tipo de dato&gt; Nombre(Tamaño, Valores
    iniciales);" para un vector o "deque&lt;Tipo de dato&gt; Nombre(Tamaño, Valores
    iniciales);" para un deque. Los paréntesis se llaman constructores y no es necesario 
    usarlos, también puedes usar (Tamaño) para que el vector o deque tengan ese tamaño y cada 
    una de sus posiciones esté vacía. También puedes crear un arreglo usando llaves y entre estas
    los valores que quieres. Para acceder a alguna de las posiciones debes escribir
    Nombre[Posición], estos se pueden modificar individualmente, como si cada uno fuera una
    variable. Ten en cuenta que se la primera posición es la posición 0. <br>
    Ejemplo: <br>
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;deque&lt;int&gt; a(6, 2); //Crea el deque de enteros {2, 2, 2, 2, 2, 2}. <br>
        &nbsp;&nbsp;&nbsp;&nbsp;a[0] = 0; //Cambia el valor de a[0] por 0, lo
        que convierte al deque a en {0, 2, 2, 2, 2, 2}. <br>
        &nbsp;&nbsp;&nbsp;&nbsp;a = {4, 8, 2, 9, 1}; //El deque a se vuelve {4, 8, 2, 9, 1}.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    } 
    </h4>
    Ahora veamos algunas funciones con deque y vector asumiendo que se llama a. <br>
    <table border="2">
        <tr><th>Funciones.</th><th>Lo que hacen.</th></tr>
        <tr><td>a.size()</td><td>Nos da el tamaño de a.</td></tr>
        <tr><td>a.push_back(Algo);</td><td>Añade Algo al final de a. Algo debe ser del
            mismo tipo de dato que lo que guarda a.
        </td></tr>
        <tr><td>a.pop_back();</td><td>Elimina el último elemento de a.</td></tr>
        <tr><td>a.push_front(Algo);</td><td>Añade Algo al inicio de a. Algo debe ser del
            mismo tipo de dato que lo que guarda a. No se puede usar con vectores.
        </td></tr>
        <tr><td>a.pop_front();</td><td>Elimina el primer elemento de a. No se puede usar 
            con vectores.
        </td></tr>
        <tr><td>a.back()</td><td>Es equivalente a escribir a[a.size() - 1].</td></tr>
        <tr><td>a.begin() + Índice</td><td>Iterador de la posición i de a.</td></tr>
        <tr><td>a.end()</td><td>Iterador del final de a.</td></tr>
        <tr><td>a.insert(a.begin() + Índice, Valor);</td><td>Inserta Valor en la posición
            Índice de a. No lo uses mucho porque su complejidad es O(Tamaño de a).
        </td></tr>
        <tr><td>a.erase(a.begin() + Índice)</td><td>Borra la posición indicada por Índice.
            No lo uses mucho porque su complejidad es O(Tamaño de a).
        </td></tr>
        <tr><td>sort(a.begin(), a.end());</td><td>Ordena a de menor a mayor.
            No lo uses mucho porque su complejidad es O(Tamaño de a log Tamaño de a).
        </td></tr>
        <tr><td>sort(a.rbegin(), a.rend());</td><td>Ordena a de mayor a menor.
            No lo uses mucho porque su complejidad es O(Tamaño de a log Tamaño de a).
        </td></tr>
        <tr><td>a.assign(Tamaño, Elemento);</td><td>Cambia el tamaño de a por tamaño 
            y cambia todos sus elementos por Elemento. No lo uses mucho porque su 
            complejidad es O(Tamaño);
        </td></tr>
        <tr><td>a.clear();</td><td>Borra todos los elementos de a.</td></tr>
        <tr><td>a.empty()</td><td>Da 1 si a está vacío y da 0 si no lo está.</td></tr>
        <tr><td>lower_bound(a.begin(), a.end(), Elemento)</td><td>Esta función solo se 
            puede usar si a está ordenado, da el puntero al primer elemento mayor 
            o igual que Elemento o a.end() si no existe. Su complejidad es O(log Tamaño de a).
        </td></tr>
        <tr><td>upper_bound(a.begin(), a.end(), Elemento)</td><td>Esta función solo se 
            puede usar si a está ordenado, da el puntero al primer elemento mayor 
            que Elemento o a.end() si no existe. Su complejidad es O(log Tamaño de a).
        </td></tr>
    </table>
    Veamos un ejemplo de uso.
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;int n;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin&gt;&gt;n;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;deque&lt;int&gt; a(n);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i < a.size(); i++){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cin&gt;&gt;a[i];<br>
        &nbsp;&nbsp;&nbsp;&nbsp;}<br>
        &nbsp;&nbsp;&nbsp;&nbsp;sort(a.begin(), a.end());<br>
        &nbsp;&nbsp;&nbsp;&nbsp;if(a.empty()){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"El deque está vacío.\n"<br>
        &nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a.clear();<br>
        &nbsp;&nbsp;&nbsp;&nbsp;}<br>
        &nbsp;&nbsp;&nbsp;&nbsp;a.assign(n, 2);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;a.push_back(n);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;*(a.begin() + n)&lt;&lt;"\n";//No olvides 
        poner un * para acceder al elemento de un iterador.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;a.pop_front();<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    } 
    </h4>
    <h3>String</h3>
    String no solo es como un tipo de dato, es similar a usar vector&lt;char&gt;. La ventaja es que también tiene 
    algunas funciones extra como s.substr(Índice, Longitud), que da la subcadena desde la posición 
    Índice con la longitud definida por Longitud.
    <h3>Tuple</h3>
    Tuple nos permite tener varios tipos de datos en un mismo lugar. Se declara como
    tuple&lt;Tipo de dato 1, Tipo de dato 2, ...&gt; Nombre;. Puedes poner cuantos tipos de datos
    quieras. Para acceder a los elementos se usa get&lt;Índice&gt;(Nombre). Veamos un ejemplo:
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;tuple&lt;int, char, string&gt; t;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;get&lt;0&gt;(t) = 2;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;get&lt;1&gt;(t) = 'G';<br>
    &nbsp;&nbsp;&nbsp;&nbsp;get&lt;2&gt;(t) = "Hola";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;get&lt;0&gt;(t)&lt;&lt;" "&lt;&lt;get&lt;1&gt;(t)&lt;&lt;" "&lt;&lt;get&lt;2&gt;(t);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    }
    </h4>
    <h3>Set y multiset</h3>
    Estas son estructuras de datos que permiten mantener una lista ordenada de elementos. La diferencia 
    es que set no puede tener elementos repetidos y multiset sí puede. Añadir elementos aquí tiene 
    complejidad logarítmica y no constante a diferencia de los vectores y deques. Se 
    declara como set&lt;Tipo de dato&gt; Nombre; o multiset&lt;Tipo de dato&gt; Nombre;. Ten 
    en cuenta que estos solo se pueden recorrer con iteradores o con un for algo 
    diferente al que ta se vio. Veamos sus 
    funciones, asumiendo que nuestro set o multiset de llama s.
    <table border="2">
        <tr><th>Funciones.</th><th>Lo que hacen.</th></tr>
        <tr><td>s.insert(Elemento);</td><td>Inserta Elemento a s.</td></tr>
        <tr><td>s.count(Elemento)</td><td>Da la cantidad de apariciones de Elemento.</td></tr>
        <tr><td>s.lower_bound(Elemento)</td><td>Da el puntero al primer elemento mayor o igual 
    que Elemento o s.end() si no existe.</td></tr>
        <tr><td>s.upper_bound(Elemento)</td><td>Da el puntero al primer elemento mayor que 
            Elemento o s.end() si no existe.</td></tr>
        <tr><td>s.erase(Elemento)</td><td>Si Elemento es un puntero, borra ese elemento. Si
            Elemento es un valor, borra todas sus apariciones de s.</td></tr>
        <tr><td>s.find(Elemento)</td><td>Da el puntero a Elemento o s.end() si no existe.</td></tr>
        <tr><td>s.clear()</td><td>Borra todos los elementos de s.</td></tr>
        <tr><td>s.empty()</td><td>Da 1 si s está vacío o 0 si no lo está.</td></tr>
        <tr><td>s.size()</td><td>Da el tamaño de s.</td></tr>
    </table>
    Veamos un ejemplo de uso de set y multiset;
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;set&lt;int&gt; s;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; 22; i++) s.insert(i * ((i % 2 == 0) ? 1 : -1));<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(auto E: s) cout&lt;&lt;E&lt;&lt;" ";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;s.erase(s.begin());<br>
    &nbsp;&nbsp;&nbsp;&nbsp;s.erase(-5);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"\n"&lt;&lt;s.size()&lt;&lt;"\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(auto E: s) cout&lt;&lt;E&lt;&lt;" ";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"\n"&lt;&lt;*s.lower_bound(2)&lt;&lt;" "&lt;&lt;*s.upper_bound(2); //No olvides los * para acceder al contenido de iteradores.<br>
    &nbsp;&nbsp;&nbsp;&nbsp;s.clear();<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;" "&lt;&lt;s.size();<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    }
    </h4>
    <h3>Map</h3>
    Map permite guardar elementos bajo llaves. Para declararlo se usa map&lt;Tipo de dato de la 
    llave, Tipo de dato que guarda&gt; Nombre;. Ten en cuenta que añadir elementos a un map 
    y acceder a ellos tiene complejidad logarítmica. Veamos algunas de sus funciones, asumiendo 
    que nuestro map se llama m.
    <table border="2">
        <tr><th>Funciones.</th><th>Lo que hacen.</th></tr>
        <tr><td>m.size()</td><td>Da el tamaño de m.</td></tr>
        <tr><td>m.count(Llave)</td><td>Da 1 si ya se está usando la Llave y da 0 si 
            no se está usando.</td></tr>
        <tr><td>m.clear();</td><td>Borra todos los elementos de m.</td></tr>
        <tr><td>m.size()</td><td>Da la cantidad de llaves diferentes que están en uso.</td></tr>
        <tr><td>m.erase(Llave)</td><td>Borra la Llave y lo que está guardando.</td></tr>
    </table>
    Si quieres recorrer un mapa, puedes usar un for similar al que se usa con set o guardar cada 
    llave en un set. Una curiosidad es que si tratas de usar una llave que aún no está en uso, el 
    map dará valores dependiendo del tipo de dato, por ejemplo, un map que guarda cualquier tipo 
    de dato numérico dará un 0,
    un map que guarda cadenas dará una cadena vacía y un map que guarda vectores, deques o sets dará 
    estas estructuras de datos vacías. Veamos un ejemplo:
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;map&lt;int, int&gt; Mapa;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Mapa[0] = 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;Mapa[0]&lt;&lt;" "&lt;&lt;Mapa[1]&lt;&lt;" "&lt;&lt;Mapa[2]&lt;&lt;"\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Mapa.erase(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;Mapa[0]&lt;&lt;" "&lt;&lt;Mapa[1]&lt;&lt;" "&lt;&lt;Mapa[2]&lt;&lt;"\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;map&lt;int, deque&lt;int&gt; &gt; Mapa2;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Mapa2[2] = {3, 2, 9, 7};<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; 4; i++){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int j = 0; j &lt; Mapa2[i].size(); j++) cout&lt;&lt;Mapa2[i][j]&lt;&lt;" ";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Mapa.clear();<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; 22; i++){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mapa[i] = i * i;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(auto E: Mapa){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"Llave: "&lt;&lt;E.first&lt;&lt;" Elemento: "&lt;&lt;E.second&lt;&lt;"\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    }
    </h4>
    <h3>Funciones</h3>
    Puedes definir tus propias funciones en los códigos. Para hacerlo se debe escribir 
    Tipo de dato Nombre(Parámetro 1, Parámetro 2, ...){Función.}. Los parámetros deben 
    estar compuestos por su tipo de dato y el nombre que tendrán en la función (no es 
    necesario que tengan el mismo nombre que las variables de la función que está 
    llamando a nuestra función). También puedes colocar el símbolo & al lado izquierdo
    de cada nombre de parámetro para que cualquier modificación que se haga al parámetro 
    dentro de la función también afecte a la variable de la función que llamó a nuestra función.
    En caso de que quieras 
    que la función no retorne un valor, en Tipo de dato escribe void. Para que la función 
    devuelva un valor, usa return Valor; o, en caso de que uses void, usa return;. Para llamar 
    a una función se debe colocar su nombre y sus parámetros encerrados entre paréntesis.
    Veamos un ejemplo:
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int Suma(int x, int y){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return x + y;<br>
    }<br>
    void Otra_suma(int _1, int _2){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;_1 + _2&lt;&lt;"\n";<br>
    }<br>
    void Ordenar(vector&lt;int&gt; &a){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;sort(a.begin(), a.end());<br>
    &nbsp;&nbsp;&nbsp;&nbsp;//Sí afecta al arreglo porque sí se está usando el símbolo &.<br>
    }<br>
    void No_ordenar(vector&lt;int&gt; a){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;sort(a.begin(), a.end());<br>
    &nbsp;&nbsp;&nbsp;&nbsp;//No afecta al arreglo porque no se está usando el símbolo &.<br>
    }<br>
    int Serie_de_Fibonacci(int a){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(a == 0 or a == 1) return 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return Serie_de_Fibonacci(a - 1) + Serie_de_Fibonacci(a - 2);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;//También puedes hacer que una función se llame a sí misma. Asegúrate de añadir un caso base para evitar que se llame a sí misma indefinidamente.<br>
    }<br>
    int main(){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;int a, b;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cin&gt;&gt;a&gt;&gt;b;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;Suma(a, b)&lt;&lt;"\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Otra_suma(a, b);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;vector&lt;int&gt; Elementos;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; 22; i++){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Elementos.push_back(i * ((i % 2 == 0) ? 2 : -4));<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; Elementos.size(); i++){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;Elementos[i]&lt;&lt;" ";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;No_ordenar(Elementos);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; Elementos.size(); i++){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;Elementos[i]&lt;&lt;" ";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;Ordenar(Elementos);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; Elementos.size(); i++){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;Elementos[i]&lt;&lt;" ";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;cout&lt;&lt;"\n"&lt;&lt;Serie_de_Fibonacci(6)&lt;&lt;"\n";<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    }
    </h4>
    Las funciones se terminan de ejecutar inmediatamente después de return. <br>
    C++ también tiene algunas otras funciones ya hechas. Estas son log10(Número), que saca el 
    logaritmo en base 10 de un número; exp(Número), que saca el resultado de elevar e al Número; 
    sin(Ángulo), que saca el seno de un Ángulo expresado en radianes; cos(Ángulo), que saca el coseno 
    de un Ángulo expresado en radianes; tan(Ángulo), que saca la tangente de un Ángulo expresado 
    en radianes; asin(Valor), que saca el seno inverso de un Valor y lo expresa en radianes; 
    acos(Valor), que saca el coseno inverso de un valor y lo expresa en radianes; atan(Valor), 
    que saca la tangente inversa de un ángulo y la expresa en radianes; sqrt(Valor), que saca 
    la raíz cuadrada de un Valor; min(Valor1, Valor2), que saca el mínimo de Valor1 y Valor2;
    max(Valor1, Valor2), que saca el máximo de Valor1 y Valor2; abs(Valor), que saca el valor 
    absoluto de un Valor; __gcd(Valor1, Valor2), que saca el máximo común divisor de Valor1 y 
    Valor2; y swap(Variable1, Variable2);, que intercambia los valores de Variable1 y Variable2. 
    Con eso ya sabes lo básico para poder programar en C++. Ahora podemos empezar con los algoritmos 
    y estructuras de datos.
    </div>
</body>
</html>