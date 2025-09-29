<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmética modular</title>
    <link rel="stylesheet" href="Estilo/Introducci_n.css">
</head>
<body>
    <?php include("Plantilla.php"); ?>
    <div style="padding: 10px; margin-top: 10vh; width: 98vw;">
    <h1>ARITMÉTICA MODULAR</h1>
    En algunos problemas se te pide que des el residuo del resultado dividido entre un número que usualmente 
    es 1000000007, 1000000009 o 998244353. Esto se hace porque la respuesta podría ser un número demasiado 
    grande. Veremos cómo operar bajo estas condiciones si el número que se nos da lo guardamos en una variable 
    llamada m.
    <h3>Suma</h3>
    Para sumar 2 números que llamaremos a y b tenemos que hacer la operación (a % m + b % m) % m.
    <h3>Resta</h3>
    Para restar 2 números que llamaremos a y b tenemos que hacer la operación ((a % m - b % m) % m + m) % m.
    Esto se hace así porque C++ también puede dar números negativos al sacar el residuo cuando se 
    trabaja con números negativos y en los problemas se busca la solución del rango [0, m).
    <h3>Multiplicación</h3>
    Para multiplicar 2 números que llamaremos a y b tenemos que hacer la operación (a % m * b % m) % m.
    <h3>División</h3>
    Para dividir 2 números que llamaremos a y b tenemos que ser cuidadosos porque se tiene que sacar la 
    operación (a % m * b<sup>m - 2</sup> % m) % m. Esto se hace así porque tenemos que multiplicar a con 
    el inverso multiplicativo de b que se sabe que es b<sup>m - 2</sup> gracias al pequeño teorema de Fermat, 
    pero esto solo se puede hacer si m es primo. Para sacar b<sup>m - 2</sup> se debe usar potenciación 
    binaria porque m - 2 es demasiado grande como para multiplicar b m - 2 veces.
    <h3>Potenciación</h3>
    Para elevar un número a a un número b se debe sacar ((a % m)<sup>b</sup>) % m. Para hacer esto de manera 
    más eficiente usaremos potenciación binaria. Consiste en tener una función recursiva que multiplica a<sup>b / 2</sup>
    con sí mismo y multiplica a en caso de que b sea impar porque b / 2 se redondea automáticamente. Veamos 
    una implementación:
    <h4>
    long long m = 1000000007;<br>
    long long Potencia(long long a, long long b){<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(b == 0) return 1;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(b == 1) return a % m;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;long long r = Potencia(a, b / 2);<br>
    &nbsp;&nbsp;&nbsp;&nbsp;r = (r % m * r % m) % m;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;if(b % 2 == 1) r = (r % m * a % m) % m;<br>
    &nbsp;&nbsp;&nbsp;&nbsp;return r % m;<br>
    }<br>
    </h4>
    La complejidad de la potenciación binaria es O(log b) en donde b es el exponente.
    </div>
</body>
</html>