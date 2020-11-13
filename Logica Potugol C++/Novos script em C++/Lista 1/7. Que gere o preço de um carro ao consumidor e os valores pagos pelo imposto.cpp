#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	cout<<"Custo da fabrica: ";
	float custo;
	cin>>custo;
	float imposto =  (custo*45)/100.0;
	float aux1 = imposto+custo;
	float lucro =  (aux1*12)/100.0;
	float aux2 =lucro+aux1;
	float total = aux2;
	
	
	
	cout<<"valor pago pelo imposto é: R$:"<<imposto<<" Mil"<<endl<<"valor do distribuidor é: R$:"<<lucro<<" Mil"<<endl<<"valor total do carro é: R$:"<<total<<" Mil"<<endl;

}

