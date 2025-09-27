#include "bits/stdc++.h"
using namespace std;
deque<int> r, t;
void Crear(int n){
    r.assign(n, 0);
    t.assign(n, 1);
    for(int i = 1; i < n; i++) r[i] = i;
}
int Buscar(int a){
    if(r[a] == a) return a;
    return r[a] = Buscar(r[a]); //Así también modificaremos el representante de cada nodo por el que pasemos.
}
void Unir(int a, int b){
    a = Buscar(a);
    b = Buscar(b);
    if(a != b){ //Vemos si sus representantes son diferentes.
        if(t[a] >= t[b]){
            t[a] += t[b];
            r[b] = a;
        } else {
            t[b] += t[a];
            r[a] = b;
        }
    }
}
int main(){
    ios_base::sync_with_stdio(0);
    cin.tie(0);
    int n, m;
    cin>>n>>m;
    Crear(n);
    deque< tuple<int, int, int> > Aristas(m);
    for(int i = 0; i < m; i++) cin>>get<0>(Aristas[i])>>get<1>(Aristas[i])>>get<2>(Aristas[i]);
    //Es importante que el primer elemento de cada tuple sea el peso de la arista.
    sort(Aristas.begin(), Aristas.end());
    int Peso_total = 0;
    for(int i = 0; i < m; i++){
        if(Buscar(get<1>(Aristas[i])) != Buscar(get<2>(Aristas[i]))){
            Unir(get<1>(Aristas[i]), get<2>(Aristas[i]));
            Peso_total += get<0>(Aristas[i]);
        }
    }
    cout<<"El peso del _rbol generador m_nimo es: "<<Peso_total;
    return 0;
}