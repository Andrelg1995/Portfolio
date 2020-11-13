#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	float nota1,nota2,nota3;
	cout<<"Informe a Primeira nota!";
	cin>>nota1;
	cout<<"Informe a Segunda nota!";
	cin>>nota2;
	cout<<"Informe a Terceira nota!";
	cin>>nota3;
	float media=(nota1+nota2+nota3)/3;
	if(media>=7){
		cout<<"Parabéns Aprovado! Sua media é: "<<media<<endl;
	}else if(media>=5 && media<7){
		cout<<"Atenção está de recuperação!"<<" Sua media é: "<<media<<endl;
	}else{
		cout<<"Reprovado!"<<" Sua media é: "<<media<<endl;
	}


}

