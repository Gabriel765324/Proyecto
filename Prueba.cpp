#include "bits/stdc++.h"
using namespace std;
//                    0   1   2   3  4    5   6  7   8  9   10   11  12   13  14  15 16
deque<int> a = {4, 287, 27, 8, 12, 228, 7, 25, 6, 17, -45, 12, 127, 98, 34, 0, 283};
deque<int> _rbol(17 * 4 + 22), Propagaci_n(17 * 4 + 22, 0); //El + 22 es solo para tener un poco más y estar seguro.
void Crear(int i, int d, int p){
    if(i == d){ //Si el inicio es igual al final, significa que nuestro segmento tiene longitud 1.
        _rbol[p] = a[i];
        return;
    }
    int Promedio = (i + d) / 2;
    Crear(i, Promedio, p * 2);
    Crear(Promedio + 1, d, p * 2 + 1);
    _rbol[p] = _rbol[p * 2] + _rbol[p * 2 + 1]; 
}
void Propagar(int i, int d, int p){
    _rbol[p] += Propagaci_n[p] * (d - i + 1);
    if(i != d){
        Propagaci_n[p * 2] += Propagaci_n[p];
        Propagaci_n[p * 2 + 1] += Propagaci_n[p];
    }
    Propagaci_n[p] = 0;
}
int Consulta(int i, int d, int p, int I, int D){
    Propagar(i, d, p);
    if(i >= I and d <= D) return _rbol[p]; //Vemos si nuestro rango actual está contenido en el rango de consulta.
    if(i > D or d < I) return 0; //Vemos si nuestro rango está fuera del rango de consulta.
    int Promedio = (i + d) / 2;
    return Consulta(i, Promedio, p * 2, I, D) + Consulta(Promedio + 1, d, p * 2 + 1, I, D);
}
void Actualizar(int i, int d, int p, int I, int D, int v){
    Propagar(i, d, p);
    if(i >= I and d <= D){//Vemos si nuestro rango actual está contenido en el rango de consulta.
        Propagaci_n[p] += v;
        Propagar(i, d, p);
        return;
    }
    if(i > D or d < I) return; //Vemos si nuestro rango está fuera del rango de consulta.
    int Promedio = (i + d) / 2;
    Actualizar(i, Promedio, p * 2, I, D, v);
    Actualizar(Promedio + 1, d, p * 2 + 1, I, D, v);
    _rbol[p] = _rbol[p * 2] + _rbol[p * 2 + 1];
}
int main(){
    ios_base::sync_with_stdio(0);
    cin.tie(0);
    return 0;
}