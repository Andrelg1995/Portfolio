programa
{
	funcao inicio()
	{
		inteiro n1,,contador,cata=0,catb=0
		real media=0.0,soma=0,n2=0
		contador=1



	     escreva("quantidade de numero a ser digitado")
		leia(n1)


		enquanto(contador<=n1){
			
			escreva("digite o numero")
			leia(n2)


			se (n2>=2.10) {

				escreva("categoria A ")
				cata=cata+1
	
			}se(n2>=1.90 e n2<2.10){

				escreva("categoria B")
					catb=catb+1
			}
			
			senao{

				escreva(" categoria C")
				
	
			}
			
			contador=contador+1
			
            
		} 
         	soma=soma+n2
		
		escreva("a media de todos  ",media=soma/n2,"\n")
		escreva("a media de todos os jogadores é ",catb,"\n")
		escreva("a media de todos os jogadores é ",cata,"\n")
		


		
	
	}
}


/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 92; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */