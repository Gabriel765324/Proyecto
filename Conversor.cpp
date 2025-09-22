#include "bits/stdc++.h"
using namespace std;
int main(){
    ios_base::sync_with_stdio(0);
    cin.tie(0);
    string a;
    bool Primero = 1;
    while(getline(cin, a)){
        if(Primero){
            cout<<"    ";
            Primero = 0;
        } else {
            cout<<"<br>\n    ";
        }
        bool Cambiar = 1;
        for(int i = 0; i < a.size(); i++){
            switch(a[i]){
                case ' ':
                if(Cambiar == 1) cout<<"&nbsp;";
                else cout<<' ';
                break;
                case '<':
                cout<<"&lt;";
                Cambiar = 0;
                break;
                case '>':
                cout<<"&gt;";
                Cambiar = 0;
                break;
                default:
                cout<<a[i];
                Cambiar = 0;
            }
        }
    }
    return 0;
}