programa
{
	funcao inicio()
	{

  real A=0.0,j,comuladora=0.0
  inteiro contador=0,contador1=0,contador2=0,contador3=0
		
 cadeia N

	escreva("Numero de jogadores   ")	
	leia(j)


  enquanto(contador<j){
	escreva("Nomes dos jogadores    ")	
	leia(N)
	escreva("Altura dos jogadores    ")	
	leia(A)	

comuladora=comuladora+A

se(A>=2.10){

escreva("Categoria A","\n")
contador1=contador1+1
	
}se(A>=1.90 e A<2.10){

escreva("Categoria B","\n")
contador2=contador2+1
}se(A<1.90){

escreva("Categoria C","\n")
contador3=contador3+1
	
}


contador=contador+1

 }

escreva("A altura m�dia do time:  ",comuladora/j,"\n")
escreva("A qtidade de jogadores que est�o na cat. A   N�",contador1,"\n")
escreva("A qtidade de jogadores que est�o na cat. B   N� ",contador2,"\n")
escreva("A qtidade de jogadores que est�o na cat. C     N�",contador3,"\n")
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta se��o do arquivo guarda informa��es do Portugol Studio.
 * Voc� pode apag�-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 284; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */