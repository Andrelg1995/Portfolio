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
		cout<<"Parab�ns Aprovado! Sua media �: "<<media<<endl;
	}else if(media>=5 && media<7){
		cout<<"Aten��o est� de recupera��o!"<<" Sua media �: "<<media<<endl;
	}else{
		cout<<"Reprovado!"<<" Sua media �: "<<media<<endl;
	}


}

