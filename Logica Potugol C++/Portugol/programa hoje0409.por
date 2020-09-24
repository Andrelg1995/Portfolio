programa//faça um programa pra ler o nome e suas 3 notas com 5 alunos
//para cada auluno o programa devará realizar:
//-caucular a media e mostra;
//mostrar a mesagem com situaçao do aluno, sendo a media for maior ou igual a 6 o aluno estara parovado caso contrario nao
{
	funcao inicio()
	{
		real n1,n2,n3,contador,N,contadorap,contadorrep,prec_apro,prec_rep
		cadeia nome
		contador=1
		contadorap=0
		contadorrep=0
		
		escreva("digite a quantidade de alunos")
		leia(N)


 enquanto(contador<=N){
 		escreva("escreva o nome: ")
		leia(nome)
		escreva("escreva o nota 1 ")
		leia(n1)
		escreva("escreva nota 2 ")
		leia(n2)
		escreva("escreva nota 3 ")
		leia(n3)
		se((n1+n2+n3)/3>=6){
			escreva (nome," voce foi aprovado media ",(n1+n2+n3)/3,"\n") 
			contadorap=contadorap+1
		}senao{
			escreva(nome," Voce foi reprovado media ",(n1+n2+n3)/3,"\n")
			contadorrep=contadorrep+1
		}
		contador=contador+1

 	
 	}

	escreva("Numero de aprovados:  ",contadorap,"\n")
	escreva("Numero de aprovados:  ",contadorrep,"\n")
	prec_apro=contadorap * 100.0/ N
	escreva("percentual de aprovaçao ",prec_apro,"%","\n")
	
	prec_rep=contadorrep * 100.0/ N
	escreva("percentual de reprovados ",prec_rep,"%","\n")
	
 	
}	
}
	
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 1106; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */