#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	int i=14,acumulador,contador=1,resultado;
	while(i<=72){
		acumulador=acumulador+i;
		cout<<"---"<<endl;
		cout<<i<<endl;
		cout<<"---"<<endl;
		i=i+2;
		contador++;
	}
	if(acumulador==1291){
		resultado=acumulador/contador;
		cout<<"-----------------------------------------------------------------------------------"<<endl;
		cout<<" A soma de tudo �: "<<acumulador<<" Quantidade de numeros Somados: "<<contador<<" A M�dia aritm�tica � : "<<resultado<<endl;
		cout<<"-----------------------------------------------------------------------------------"<<endl;
	}else{
		cout<<"Alguma coisa est� errada reveja o codigo!"<<endl;	
	}
}


