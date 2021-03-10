#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	float hora,minutos,segundos;
	cout<<"Digite Horas: ";cin>>hora;
	cout<<"Digite Minutos: ";cin>>minutos;
	cout<<"Digite Segundos: ";cin>>segundos;
	cout<<"Segundos totais é: "<<(hora*60)*60+(minutos*60)+segundos<<endl;



}


