#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	int i=1,n1,contnum=0,contnot=0,n2;
	cout<<"Quantos valores deseja ler?:  ";cin>>n2;
	while(i<=n2)
	{
		cout<<"Digite "<<i<<"º numero: ";cin>>n1;
		if(n1>=10 && n1<=50){
			contnum++;	
		}else{
			contnot++;	
		}
		i++;
	}
cout<<"--------------------------------------------------------"<<endl;
cout<<"Quantidade numeros entre 10 e 50 : "<<contnum<<endl;
cout<<"--------------------------------------------------------"<<endl;
cout<<"Quantidade numeros fora da faixa de 10 e 50 : "<<contnot<<endl;
cout<<"--------------------------------------------------------"<<endl;

}


