#include<iostream>
#include<math.h>
using namespace std;

main(){
	
	setlocale(LC_ALL,"portuguese");

	int vetor[8],soma=0;
	
	for(int i=0;i<8;i++) 
	{	
		cout<<"digite o "<<i+1<<"o. digite binario: ";
		cin>>vetor[i];
	}
	
	/*todos so valores elevado a 2 e na casa de tras pra frente(potencia) vezes o binario depois soma tudo e tem resultado em decimal */
	
		for(int i=0;i<8;i++) {
		
		cout<<vetor[i];
		soma=soma+(pow(2,7-i)*vetor[i]);
		
		
	}	
	cout<<" em decimal é"<<soma<<endl;
	
}
