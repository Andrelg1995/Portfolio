#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	float anos,preco;
	int cigarro;
	cout<<"Numero de anos fumando: ";
	cin>>anos;
	cout<<"Numero de cigarros fumado por dia: ";
	cin>>cigarro;
	cout<<"Preço da carteira de cigarro : ";
	cin>>preco;
	//valor da carteira pelo numero de cigarros em um maço
	float unici = preco/20;
	
	//faz o calculo do preço inidade com o numero de cigarros
	float preci = unici*cigarro;
	
	


	


cout<<"Voce gasta por dia: R$:"<<preci
<<endl<<"Voce gasta por semana: R$:"<<preci*7
<<endl<<"Voce gasta por mes: R$:"<<preci*31
<<endl<<"Voce gasta por ano: R$:"<<preci*365<<endl<<"E no total de anos que Voce fumou Voce gastou: R$:"<<preci*(anos*365);




}

