> Soluciones.txt
g++ Generar.cpp -o Generar.exe
for x in {0..9}; do
    ./Generar.exe < a$x.in > Caso$x.txt
done
g++ Resolver.cpp -o Resolver.exe
for x in {0..9}; do
    ./Resolver.exe < Caso$x.txt >> Soluciones.txt
done
php Encriptar.php