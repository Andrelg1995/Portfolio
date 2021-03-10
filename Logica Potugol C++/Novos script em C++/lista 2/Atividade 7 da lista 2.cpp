#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	int i=0,infinit=0;
	while(i<=200){
		cout<<"múltiplos de 7 x "<<infinit<<" = "<<i<<"|"<<endl;
		cout<<"--------------------------"<<endl;
		infinit++;
		i=i+7;
		}
}


