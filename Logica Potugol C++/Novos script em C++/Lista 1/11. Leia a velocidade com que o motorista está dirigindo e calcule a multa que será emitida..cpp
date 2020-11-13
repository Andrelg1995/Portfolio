#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	float velo;
	cout<<"Leitura de velocidade: ";
	cin>>velo;
	if(velo>110){
		
		cout<<" R$200, Esta acima de 30 km/h da velocidade permitida.";
		
	}else if(velo>=90 && velo<=110){
		cout<<" R$100, Esta acima de 10 ate 30 km/h da velocidade permitida.";
		
	}else if(velo>80){
		cout<<" R$50, a velocidade ultrapassar em até 10 km/h a velocidade permitida.";
	}


}

