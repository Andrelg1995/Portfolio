#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	int n1,i=2,resultado=0;
	cout<<"Digite um numero: ";cin>>n1;


	
	while (i <= n1 / 2) 
	{
	    if (n1 % i == 0) 
		{
	       resultado++; 
	    }
		i++;
	}
 	cout<<resultado<<endl;
 	if(resultado == 0){
    printf("É um número primo ", n1);
 	}else{
    printf("Não é um número primo ", n1);
	}
 
}


