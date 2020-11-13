#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	int n1,n2;
    cout<<"digite o primeiro numero: ";
	cin>>n1;
	cout<<"digite o segundo numero: ";
	cin>>n2;
    if(n1>n2 && n2<n1){
    	cout<<"O Primeiro numero é maior!";
	}else if(n1==n2){
	cout<<"A=B!";
	}else{
		cout<<"O Segundo numero é maior!";
	}


}

