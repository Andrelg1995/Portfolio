#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	float t,a,h;
	cout<<"base :";
	cin>>a;
	cout<<"altura :";
	cin>>h;
	t= (a*a)*h*3.1;
    cout<<"O Volume é :"<<t<<" area da base cilindro é: "<<a<<endl;
}

