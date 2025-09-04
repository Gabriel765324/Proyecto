#include "bits/stdc++.h"
using namespace std;
int main(){
    vector<string> C_digo;
    vector< pair<string, int> > Reemplazos;
    double vh = 0, px = 30;
    string s;
    while(getline(cin, s)) C_digo.push_back(s);
    int Posici_n = 0;
    for(auto E: C_digo){
        int n = E.size();
        for(int i = 0; i < n + 1; i++){
            if(E[i] == 'p' and E[i + 1] == 'x'){
                for(int j = i - 1; j > -1; j--){
                    if(E[j] == ' '){
                        int cj = j;
                        string Valor = "";
                        while(j < i){
                            Valor += E[j];
                            j++;
                        }
                        double Nuevito;
                        stringstream Conversor;
                        Conversor<<Valor;
                        Conversor>>Nuevito;
                        Nuevito += px;
                        string Usar;
                        stringstream Conversor2;
                        Conversor2<<Nuevito;
                        Conversor2>>Usar;
                        string Reemplazar = "";
                        for(int k = 0; k <= cj; k++) Reemplazar += E[k];
                        Reemplazar += Usar;
                        for(int k = i; k < n; k++) Reemplazar += E[k];
                        Reemplazos.push_back({Reemplazar, Posici_n});
                        break;
                    }
                }
                break;
            }
            if(E[i] == 'v' and E[i + 1] == 'h'){
                for(int j = i - 1; j > -1; j--){
                    if(E[j] == ' '){
                        int cj = j;
                        string Valor = "";
                        while(j < i){
                            Valor += E[j];
                            j++;
                        }
                        double Nuevito;
                        stringstream Conversor;
                        Conversor<<Valor;
                        Conversor>>Nuevito;
                        Nuevito += vh;
                        string Usar;
                        stringstream Conversor2;
                        Conversor2<<Nuevito;
                        Conversor2>>Usar;
                        string Reemplazar = "";
                        for(int k = 0; k <= cj; k++) Reemplazar += E[k];
                        Reemplazar += Usar;
                        for(int k = i; k < n; k++) Reemplazar += E[k];
                        Reemplazos.push_back({Reemplazar, Posici_n});
                        break;
                    }
                }
                break;
            }
        }
        Posici_n++;
    }
    for(auto E: Reemplazos){
        C_digo[E.second] = E.first;
    }
    for(auto E: C_digo){
        cout<<E<<"\n";
    }
    return 0;
}
/*
*{
    position: absolute;
    text-align: center;
    font-family: 'Courier New', Courier, monospace;
    margin: 0px;
}
.Caja1{
    width: 80vw;
    height: 13.9vh;
    background-color: rgba(146, 248, 44, 0.546);
    margin-top: 80px;
    margin-left: 9.52vw;
}
.Datos{
    width: 6vw;
    height: 3vh;
    margin-top: 88px;
    margin-left: 46.52vw;
    background-color: cyan;
}
.Dato_nombre{
    width: 60vw;
    height: 3vh;
    background-color: rgba(248, 207, 44, 0.546);
    margin-top: 118px;
    margin-left: 19.52vw;
}
.Dato_correo{
    width: 60vw;
    height: 3vh;
    background-color: rgba(248, 207, 44, 0.546);
    margin-top: 148px;
    margin-left: 19.52vw;
}
.Caja2{
    width: 80vw;
    height: 55vh;
    background-color: rgba(146, 248, 44, 0.546);
    margin-top: 195px;
    margin-left: 9.52vw;
}
.Modificar_datos{
    width: 12vw;
    height: 3vh;
    margin-top: 203px;
    margin-left: 43.52vw;
    background-color: cyan;
}
.Nombre{
    width: 16vw;
    height: 3vh;
    background-color: rgba(248, 207, 44, 0.546);
    margin-top: 233px;
    margin-left: 41.52vw;
}
.Dar_nombre{
    width: 24vw;
    height: 3vh;
    margin-top: 263px;
    margin-left: 37.52vw;
}
.Correo{
    width: 16vw;
    height: 3vh;
    background-color: rgba(248, 207, 44, 0.546);
    margin-top: 299px;
    margin-left: 41.52vw;
}
.Dar_correo{
    width: 24vw;
    height: 3vh;
    margin-top: 329px;
    margin-left: 37.52vw;
}
.Contrase_a{
    width: 16vw;
    height: 3vh;
    background-color: rgba(248, 207, 44, 0.546);
    margin-top: 365px;
    margin-left: 41.52vw;
}
.Dar_contrase_a{
    width: 24vw;
    height: 3vh;
    margin-top: 395px;
    margin-left: 37.52vw;
}
.Contrase_a2{
    width: 16vw;
    height: 3vh;
    background-color: rgba(248, 207, 44, 0.546);
    margin-top: 431px;
    margin-left: 41.52vw;
}
.Dar_contrase_a2{
    width: 24vw;
    height: 3vh;
    margin-top: 461px;
    margin-left: 37.52vw;
}
.Antigua_contrase_a{
    width: 16vw;
    height: 3vh;
    background-color: rgba(248, 207, 44, 0.546);
    margin-top: 497px;
    margin-left: 41.52vw;
}
.Dar_antigua_contrase_a{
    width: 24vw;
    height: 3vh;
    margin-top: 527px;
    margin-left: 37.52vw;
}
.Enviar{
    width: 16vw;
    height: 3vh;
    margin-top: 563px;
    margin-left: 41.52vw;
    background-color: cyan;
}
*/