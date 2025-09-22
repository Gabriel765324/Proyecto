#include "bits/stdc++.h"
using namespace std;
int main(){
    ios_base::sync_with_stdio(0);
    cin.tie(0);
    deque<int> Arreglo = {4, 287, 27, 8, 12, 228, 7, 25, 6, 17, 45, 12};
    for(int i = 1; i < 12; i++) Arreglo[i] += Arreglo[i - 1];
    cout<<"La suma del rango [6, 8] es "<<Arreglo[8] - Arreglo[5]<<".";
    return 0;
}