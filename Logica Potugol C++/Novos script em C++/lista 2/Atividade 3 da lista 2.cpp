#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	double altura,peso;
	cout<<"Digite sua altura: ";cin>>altura;
	cout<<"Digite seu peso: ";cin>>peso;
    cout<<"Seu IMC �: "<<peso/(altura*altura)<<endl;


}


