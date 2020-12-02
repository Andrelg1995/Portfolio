#include<iostream>
using namespace std;

main(){

	setlocale(LC_ALL,"portuguese");
	int res;
	int contador=1,nota=0,notan=0;
	while(contador<=17)
	{
		if(contador==1)
		{
		cout<<"Questão 1 "<<endl;	
		cout<<"Tema: Legislação de Trânsito "<<endl;
		cout<<"Linhas, marcações, símbolos e legendas pintadas nas vias são: "<<endl;
		cout<<"1 = dispositivos auxiliares de segurança "<<endl;
		cout<<"2 = elementos da sinalização horizontal "<<endl;
		cout<<"3 = placas de advertência "<<endl;
		cout<<"4 = placas de regulamentação "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==2){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			
			}
		}
		
		
		if(contador==2)
		{
		cout<<"Questão 2 "<<endl;	
		cout<<"Tema: Primeiros Socorros "<<endl;
		cout<<"Vítima apresenta fratura exposta (o osso quebrado está para fora). O que fazer?: "<<endl;
		cout<<"1 = Observar se a vítima está respirando, imobilizar o membro e acalmar a vítima "<<endl;
		cout<<"2 = Empurrar aquele osso para dentro "<<endl;
		cout<<"3 = Garrotear o membro fazendo um torniquete "<<endl;
		cout<<"4 = Puxar o membro para que o osso volte para seu lugar "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==1){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		
		
		
		if(contador==3)
		{
		cout<<"Questão 3 "<<endl;	
		cout<<"Tema: Primeiros Socorros "<<endl;
		cout<<"Vítima que usava cinto de segurança está inconsciente dentro do veículo. O que fazer em primeiro lugar?: "<<endl;
		cout<<"1 = Sinalizar o local e chamar o resgate "<<endl;
		cout<<"2 = Se for banco reclinável, incliná-lo o máximo possível. "<<endl;
		cout<<"3 = Retirar o cinto de segurança "<<endl;
		cout<<"4 = Retirar a vítima do veículo e deitá-la "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==1){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		
		
		
		if(contador==4)
		{
		cout<<"Questão 4 "<<endl;	
		cout<<"Tema: Mecânica básica "<<endl;
		cout<<"Assinale a alternativa correta: "<<endl;
		cout<<"1 = Odômetro: indica o nível de combustível "<<endl;
		cout<<"2 = Termômetro: indica a descarga da bateria "<<endl;
		cout<<"3 = Amperímetro: indica o nível da água no radiador "<<endl;
		cout<<"4 = Manômetro: indica a pressão do óleo no motor "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==14){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk essa eu tive q pesquisar a respsota "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		
		
		if(contador==5)
		{
		cout<<"Questão 5 "<<endl;	
		cout<<"Tema: Direção Defensiva "<<endl;
		cout<<"O condutor na direção de um veículo em movimento, precisa ver tudo o que acontece: "<<endl;
		cout<<"1 = à sua frente, nos lados direito e esquerdo e atrás do seu veículo "<<endl;
		cout<<"2 = apenas à sua frente e nos lados do seu veículo "<<endl;
		cout<<"3 = O condutor na direção de um veículo em movimento, precisa ver tudo o que acontece "<<endl;
		cout<<"4 = apenas à sua frente e atrás do seu veículo "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==1){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		
		if(contador==6)
		{
		cout<<"Questão 6 "<<endl;	
		cout<<"Tema: Direção Defensiva "<<endl;
		cout<<"Ofuscamento e freios deficientes são situações de risco geradas por condições adversas relacionadas, respectivamente, com: "<<endl;
		cout<<"1 = luz e veículo "<<endl;
		cout<<"2 = via e veículo "<<endl;
		cout<<"3 = clima e/ou ambiente e condutor "<<endl;
		cout<<"4 = clima e/ou ambiente e veículo "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==1){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		
		
		if(contador==7)
		{
		cout<<"Questão 7 "<<endl;	
		cout<<"Tema: Mecânica básica "<<endl;
		cout<<"Fazem parte da embreagem:: "<<endl;
		cout<<"1 = bandejas e barras de sustentação "<<endl;
		cout<<"2 = platô, disco de fricção e rolamento da embreagem. "<<endl;
		cout<<"3 = junta homocinética e pivôs. "<<endl;
		cout<<"4 = pedal e câmbio. "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==4){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		
		
		if(contador==8)
		{
		cout<<"Questão 8 "<<endl;	
		cout<<"Tema: Direção Defensiva "<<endl;
		cout<<"A segurança na direção de um veículo depende: "<<endl;
		cout<<"1 = da categoria da Carteira Nacional de Habilitação. "<<endl;
		cout<<"2 = do comportamento adequado do condutor. "<<endl;
		cout<<"3 = da marca do veículo. "<<endl;
		cout<<"4 = do trânsito. "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==2){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		
		
		
		if(contador==9)
		{
		cout<<"Questão 9 "<<endl;	
		cout<<"Tema: Legislação de Trânsito "<<endl;
		cout<<"Órgãos colegiados responsáveis pelo julgamento dos primeiros recursos interpostos contra penalidades impostas por órgãos ou entidades executivos de trânsito das diversas jurisdições: "<<endl;
		cout<<"1 = CETRAN. "<<endl;
		cout<<"2 = Câmaras Temáticas. "<<endl;
		cout<<"3 = Juntas de Julgamento. "<<endl;
		cout<<"4 = JARI. "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==4){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		
		
		if(contador==10)
		{
		cout<<"Questão 10 "<<endl;	
		cout<<"Tema: Direção Defensiva "<<endl;
		cout<<"Após uma noite em claro, o condutor deve: "<<endl;
		cout<<"1 = ouvir uma música bem movimentada no rádio de seu veículo. "<<endl;
		cout<<"2 = levar alguém que converse bastante para mantê-lo desperto. "<<endl;
		cout<<"3 = tomar um café bem forte antes de dirigir. "<<endl;
		cout<<"4 = deixar de dirigir no dia seguinte. "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==4){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		
		
		
		if(contador==11)
		{
		cout<<"Questão 11 "<<endl;	
		cout<<"Tema: Legislação de Trânsito "<<endl;
		cout<<"Diante da placa simulado detran placas de regulamentação - velocidade máxima permitida 80 km/h(R-19), você: "<<endl;
		cout<<"1 = mantém velocidade igual ou abaixo da velocidade indicada na placa. "<<endl;
		cout<<"2 = reduz a velocidade e, se necessário, pára seu veículo, dando preferência aos veículos que circulam na via preferencial. "<<endl;
		cout<<"3 = para seu veículo e olha bem o trânsito antes de entrar ou cruzar a via. "<<endl;
		cout<<"4 = circula acima da velocidade indicada na placa. "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==1){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		
		
		if(contador==12)
		{
		cout<<"Questão 12 "<<endl;	
		cout<<"Tema: Primeiros Socorros "<<endl;
		cout<<"Uma pessoa bateu a cabeça, perdeu a consciência e depois acordou e diz que está bem. O que fazer?: "<<endl;
		cout<<"1 = Sempre levar a pessoa ao hospital. "<<endl;
		cout<<"2 = Recomendar que a pessoa fique acordada durante 24 horas. "<<endl;
		cout<<"3 = Neste caso, não há necessidade de ir ao hospital. "<<endl;
		cout<<"4 = Apenas fazer compressas com gelo no local da batida. "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==1){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		
		
		if(contador==13)
		{
		cout<<"Questão 13 "<<endl;	
		cout<<"Tema: Cidadania e meio ambiente "<<endl;
		cout<<"O trânsito em condições seguras é um direito: "<<endl;
		cout<<"1 = dos motoristas de transporte coletivo, apenas. "<<endl;
		cout<<"2 = dos motoristas, apenas. "<<endl;
		cout<<"3 = dos pedestres, apenas. "<<endl;
		cout<<"4 = de todos. "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==4){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		
		if(contador==14)
		{
		cout<<"Questão 14 "<<endl;	
		cout<<"Tema: Legislação de Trânsito "<<endl;
		cout<<"A natureza de infrção que soma 7 pontos na CNH é a: "<<endl;
		cout<<"1 = leve. "<<endl;
		cout<<"2 = média. "<<endl;
		cout<<"3 = grave. "<<endl;
		cout<<"4 = gravíssima. "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==4){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		
		
		if(contador==15)
		{
		cout<<"Questão 15 "<<endl;	
		cout<<"Tema: Legislação de Trânsito "<<endl;
		cout<<"A natureza de infrção que soma 3 pontos na CNH é a: "<<endl;
		cout<<"1 = leve. "<<endl;
		cout<<"2 = média. "<<endl;
		cout<<"3 = grave. "<<endl;
		cout<<"4 = gravíssima. "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==1){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		
		
		if(contador==16)
		{
		cout<<"Questão 16 "<<endl;	
		cout<<"Tema: Legislação de Trânsito "<<endl;
		cout<<"A natureza de infrção que soma 5 pontos na CNH é a: "<<endl;
		cout<<"1 = leve. "<<endl;
		cout<<"2 = média. "<<endl;
		cout<<"3 = grave. "<<endl;
		cout<<"4 = gravíssima. "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==3){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		
		if(contador==17)
		{
		cout<<"Questão 17 "<<endl;	
		cout<<"Tema: Legislação de Trânsito "<<endl;
		cout<<"A natureza de infrção que soma 4 pontos na CNH é a: "<<endl;
		cout<<"1 = leve. "<<endl;
		cout<<"2 = média. "<<endl;
		cout<<"3 = grave. "<<endl;
		cout<<"4 = gravíssima. "<<endl;
		cout<<"informe uma resposta: ";cin>>res;
			if(res==2){
			nota++;
			cout<<"Resposta correta meu Amigo(a) mais 1 ponto pra ti "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}else
			{
			notan++;
			cout<<"Errou meu Amigo(a) Atenção vem ai a proxima pergunta kkk "<<endl<<endl;
			cout<<"---------------------------------------------------------------"<<endl<<endl;
			}
		}
		contador++;
		
			
	}
	cout<<"-----------------------------------------------"<<endl;
	cout<<"Questoes corretas sua nota: "<<nota<<" acertou "<<nota<<" de 16 perguntas"<<endl;
	cout<<"-----------------------------------------------"<<endl;
	cout<<"Questoes incorretas: "<<notan<<" errou "<<notan<<" de 16 perguntas"<<endl;
	cout<<"-----------------------------------------------"<<endl;
	system("pause");
}


