#include<iostream>
#include<time.h>
#include<stdlib.h>

using namespace std;

main()
{
	
	setlocale(LC_ALL,"Portuguese");
	srand (time(NULL)); //inicializa a ramdomização
	
	
	int a, b, R;
	
	//cout<<"Primeiro numero  " ; cin>>a;
	//cout<< "segundo numero  " ; cin>>b;
	a=rand() % 31 + 20;
	b=rand() % 31 + 20;
	R=a+b;
	cout<<"a soma de "<<a<<" + "<<b<<" é "<<R<<endl;
	
	
}
