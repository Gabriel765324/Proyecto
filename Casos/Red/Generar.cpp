#include "bits/stdc++.h"
using namespace std;
int main(){
    int Este;
    cin>>Este;
    Este += 10;
    mt19937 Aleatorio(Este);
    uniform_int_distribution<int> _1(1e5 - 22, 1e5), _2(-1e5, 1e5);
    int n = _1(Aleatorio), q = _1(Aleatorio);
    cout<<n<<"\n";
    for(int i = 0; i < n; i++){
        /*uniform_int_distribution<int> Hola(1, 40);
        if(Hola(Aleatorio) == 2) cout<<"57 ";
        else cout<<_2(Aleatorio)<<" ";*/
        int Actual = _2(Aleatorio);
        cout<<Actual<<" ";
    }
    cout<<"\n"<<q<<"\n";
    for(int i = 0; i < q; i++){
        uniform_int_distribution<int> _3(0, n - 1);
        int l = _3(Aleatorio);
        uniform_int_distribution<int> _4(l, n - 1);
        int r = _4(Aleatorio);
        uniform_int_distribution<int> _5(0, 1);
        cout<<_5(Aleatorio)<<" "<<l<<" "<<r<<"\n";
    }
    cout<<"\n";
    return 0;
}