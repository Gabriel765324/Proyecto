#include "bits/stdc++.h"
using namespace std;
deque<long long> a, _rbol;
void Crear(long long i, long long d, long long p){
    if(i == d){
        _rbol[p] = a[i];
        return;
    }
    long long P = (i + d) / 2;
    Crear(i, P, p * 2);
    Crear(P + 1, d, p * 2 + 1);
    _rbol[p] = _rbol[p * 2] + _rbol[p * 2 + 1];
}
long long Consulta(long long i, long long d, long long p, long long l, long long r){
    if(i >= l and d <= r) return _rbol[p];
    if(i > r or d < l) return 0;
    long long P = (i + d) / 2;
    return Consulta(i, P, p * 2, l, r) + Consulta(P + 1, d, p * 2 + 1, l, r);
}
void Actualizar(long long i, long long d, long long p, long long l, long long r, long long v){
    if(i >= l and d <= r){
        _rbol[p] = v;
        return;
    }
    if(i > r or d < l) return;
    long long P = (i + d) / 2;
    Actualizar(i, P, p * 2, l, r, v);
    Actualizar(P + 1, d, p * 2 + 1, l, r, v);
    _rbol[p] = _rbol[p * 2] + _rbol[p * 2 + 1];
}
int main(){
    long long n, q;
    cin>>n;
    a.assign(n, 0);
    _rbol.assign(n * 4 + 22, 0);
    for(long long i = 0; i < n; i++){
        cin>>a[i];
    }
    Crear(0, n - 1, 1);
    /*for(auto E: _rbol) cerr<<E<<" ";
    cerr<<"\n";*/
    cin>>q;
    long long Respuesta = 0;
    for(long long i = 0; i < q; i++){
        long long t, l, r;
        cin>>t>>l>>r;
        if(t == 0){
            long long al = Consulta(0, n - 1, 1, l, l), ar = Consulta(0, n - 1, 1, r, r);
            //cerr<<al<<" "<<ar<<"\n\n";
            Actualizar(0, n - 1, 1, l, l, ar);
            Actualizar(0, n - 1, 1, r, r, al);
        } else {
            Respuesta += Consulta(0, n - 1, 1, l, r);
        }
        /*for(long long j = 0; j < n; j++) cerr<<Consulta(0, n - 1, 1, j, j)<<" ";
        cerr<<"\n";*/
    }
    cout<<Respuesta<<"\n";
    return 0;
}