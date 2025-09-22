#include "bits/stdc++.h"
using namespace std;
int LSOne(int n){
    return n & -n;
}
deque<int> _rbol, Arreglo;
void Crear(){ //Usamos & para que pase los elementos más rápido.
    int n = Arreglo.size();
    _rbol.assign(n + 1, 0);
    for(int i = 0; i < n; i++){
        _rbol[i + 1] += Arreglo[i];
        if(i + 1 + LSOne(i + 1) <= n) _rbol[i + 1 + LSOne(i + 1)] += _rbol[i + 1];
    }
}
int Consulta(int i, int j){
    if(i > 0) return Consulta(0, j) - Consulta(0, i - 1);
    int Respuesta = 0;
    for(j++; j > 0; j -= LSOne(j)) Respuesta += _rbol[j];
    return Respuesta;
}
void Actualizar(int i, int v){
    int Suma = v - Arreglo[i];
    Arreglo[i] = v; //No olvidemos también modificar el valor del arreglo original para poder hacer futuras actualizaciones.
    for(i++; i <= Arreglo.size(); i += LSOne(i)) _rbol[i] += Suma;
}
int main(){
    ios_base::sync_with_stdio(0);
    cin.tie(0);
    Arreglo = {4, -287, 27, 8, -12, 228, 7, -25, -6, 17, -45, 12, 127, 98, -34, 0, 283};
    Crear();
    cout<<Consulta(4, 6)<<"\n";
    Actualizar(5, -3);
    cout<<Consulta(4, 6)<<"\n";
    Actualizar(5, 0);
    cout<<Consulta(4, 6)<<"\n";
    return 0;
}