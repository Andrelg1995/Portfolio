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
	a=rand() % 100 + 1;
	b=rand() % 100 + 1;
	R=a+b;
	cout<<"a soma de "<<a<<" + "<<b<<" é "<<R<<endl;
	
	
}
