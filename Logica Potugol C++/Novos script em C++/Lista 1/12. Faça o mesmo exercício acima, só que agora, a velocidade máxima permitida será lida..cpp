#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	float velo,velomax;
	cout<<"Celocidade maxima permitida: ";
	cin>>velomax;
	cout<<"Leitura de velocidade: ";
	cin>>velo;
	if(velo>=velomax+31){
		
		cout<<" R$200, Esta acima de 30 km/h da velocidade permitida.";
		
	}else if(velo>=velomax+11 && velo<=velomax+30){
		cout<<" R$100, Esta acima de 10 ate 30 km/h da velocidade permitida.";
		
	}else if(velo>=velomax+10){
		cout<<" R$50, a velocidade ultrapassar em até 10 km/h a velocidade permitida.";
	}


}

