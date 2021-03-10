#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	int n1,n2;
	cout<<"Digite o Primeiro numero: ";cin>>n1;
	cout<<"Digite o Segundo numero: ";cin>>n2;
	if(n2!=0){
	cout<<"quociente de n1 e n2 é:  "<<n1/n2;
	}else{
	cout<<"Nao divisivel por zero ";
	}
}


