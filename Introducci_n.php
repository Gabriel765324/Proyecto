<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducción.</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <div class="Fondo"></div>
    <a href="Cursos.php">Volver a la página anterior.</a>
    <div>
    <center><h1 class="Título">INTRODUCCIÓN.</h1></center>
    Bienvenido/a a compite con C++, en esta página podrás aprender sobre temas que te ayudarán a
    aprender a usar C++ en programación competitiva.
    <h3>¿Qué es la programación competitiva?</h3>
    Es una disciplina en la que se tienen que resolver problemas usando algoritmos eficientes tanto en
    memoria como en tiempo.
    <h3>¿Qué es C++?</h3>
    Es el lenguaje de programación que usaremos a lo largo de este curso. <br>
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
    tiene una gran mayoría de las librerías que necesitarás. <br><br>
    using namespace std: Sirve para evitar tener que escribir std:: antes de algunas cosas que normalmente
    lo requieren. <br><br>
    int main(): Aquí empieza la función principal, esta es la primera que se ejecuta cuando se ejecuta el
    código. El contenido de la función debe ir encerrado entre llaves. <br><br>
    ios_base::sync_with_stdio(0) y cin.tie(0): Son líneas que permiten usar la entrada y salida rápida, pero
    no permiten ver la salida en tiempo real, solo cuando se termina de ejecutar el código. Puedes quitar estas
    líneas si es que estás probando tu código, pero si quieres ver lo que está haciendo tu código es mejor usar
    cerr (explicación más abajo). <br><br>
    return 0: Esta línea hace que la función retorne 0, poder retornar valores no es muy útil con la
    función principal, pero servirá cuando creemos nuestras propias funciones. <br>
    <h3>¿Para qué sirve usar ';'?</h3>
    El ';' debe ser usado al final de la mayoría de instrucciones en C++, no hacerlo hará que el
    código no se compile correctamente; en el curso podrás ver cuando haya que hacerlo.
    <h3>Variables</h3>
    En C++ se pueden crear variables locales declarándolas dentro de una función, que solo se pueden usar
    dentro de esa función, y variables globales, que se colocan afuera de las funciones y se pueden usar
    en cualquier función. Para declararlas se escribe el tipo de dato y el nombre de la variable.
    <h4>
    #include "bits/stdc++.h"<br>
    using namespace std;<br>
    int main(){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;ios_base::sync_with_stdio(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;cin.tie(0);<br>
        &nbsp;&nbsp;&nbsp;&nbsp;int Entero = 2;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;double Real = 2.2222;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;string Cadena = "Hola";<br>
        &nbsp;&nbsp;&nbsp;&nbsp;char Caracter = 'B';<br>
        &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
    } 
    </h4>
    <table border="2">
        <tr><th>Tipo de dato.</th><th>Límites.</th></tr>
        <tr><td>int</td><td>Números enteros en el rango [-2147483648, 2147483647]</td></tr>
        <tr><td>long long</td><td>Números enteros en el rango [-9223372036854775808, 9223372036854775807]</td></tr>
        <tr><td>float</td><td>Números racionales en el rango [−3.4×10^38, 3.4×10^38] aproximadamente, pero con alrededor
            de 7 dígitos de precisión.
        </td></tr>
        <tr><td>double</td><td>Números racionales en el rango [1.8×10^308, 1.8×10^308] aproximadamente, pero con alrededor
            de 15 dígitos de precisión.</td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
    </table>
    </div>
</body>
</html>