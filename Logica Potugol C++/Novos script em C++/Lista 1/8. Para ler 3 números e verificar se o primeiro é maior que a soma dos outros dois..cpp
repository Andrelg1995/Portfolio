#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	int n1,n2,n3;
	cout<<"digite primeiro numero: ";
	cin>>n1;
	cout<<"digite segundo numero: ";
	cin>>n2;
	cout<<"digite terceiro numero: ";
	cin>>n3;
	int s=n2+n3;
	
	if(n1>s){
		cout<<"O primeiro numero � maior sim,"<<" primeiro numero �: "<<n1<<", e a soma do 2 ultimos �: "<<s<<endl;
	}else{
		cout<<"O primeiro nao � maior,"<<" primeiro numero �: "<<n1<<", e a soma do 2 ultimos �: "<<s<<endl;
	}

}

