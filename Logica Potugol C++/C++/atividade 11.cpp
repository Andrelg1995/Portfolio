#include <iostream>
using namespace std;

main ()
{
	system("color C ");
	
	setlocale(LC_ALL,"Portuguese");
	
	int N,i;//i=indice,n= numeros de slots
	cout<<"quantos alunos há na turma?"; cin>>N;
	string nome[N];
	float n1[N], n2[N],	n3[N], n4[N], media[N],soma=0, maiormedia=-1;
	//entrada
	for (i=0;i<N;i++){
		cout<<"aluno  :"; cin>>nome[i];
		cout<<"Nota1  :";cin>>n1[i];
		cout<<"Nota2  :";cin>>n2[i];
		cout<<"nota3  :";cin>>n3[i];
		media[i]=(n1[i]+n2[i]+n3[i])/3;
		cout<<"media: "<<media[i]<<endl;
		soma=soma+media[i];
		if(media[i]>=6) cout<<"Situacao Aprovado"<<endl<<endl;
		else cout<<"Situacao reprovado"<<endl<<endl;
		if(media[i]>maiormedia) maiormedia=media[i];//analisa e regitra a maior media
		
		
	}
//relatorio 
cout<<"nome\tnota 1 \tnota 2 \tnota 3"<<endl;
cout<<"-----------------------------------------------------------------"<<endl;
for(i=0;i<N;i++){
	cout<<nome[i]<<"\t"<<n1[i]<<"\t"<<n2[i]<<"\t"<<n3[i]<<"\t"<<endl;
	
	
	
}
cout<<"----------------------------------------------------------------------"<<endl;
cout<<"A media é: "<<soma/N<<endl;//media da turma
cout<<"----------------------------------------------------------------------"<<endl;

cout<<"ALUNOS APROVADOS: "<<endl;
cout<<"Nome\tMédia "<<endl;
cout<<"----------------------------------------------------------------------"<<endl;
for(i=0;i<N;i++){
	
	if (media[i]>=6)
	{
		cout<<nome[i]<<"\t"<<media[i]<<endl;
	}
	

	
}
	cout<<"----------------------------------------------------------------------"<<endl;
	cout<<"A maior media é: "<<maiormedia<<" e o(s) aluno(s) que a obteve(iveram): "<<endl;
	
	
	for(i=0;i<N;i++){
		
			if(media[i]==maiormedia)
			{
				cout<<nome[i]<<endl;
			}
		
		
		
	}
	
	
	  
	
}
