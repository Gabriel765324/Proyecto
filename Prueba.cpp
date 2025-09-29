#include "bits/stdc++.h"
using namespace std;
long long m = 1000000007;
long long Potencia(long long a, long long b){
    if(b == 0) return 1;
    if(b == 1) return a % m;
    long long r = Potencia(a, b / 2);
    r = (r % m * r % m) % m;
    if(b % 2 == 1) r = (r % m * a % m) % m;
    return r % m;
}
int main(){
    ios_base::sync_with_stdio(0);
    cin.tie(0);
    cout<<Potencia(2, 20);
    return 0;
}