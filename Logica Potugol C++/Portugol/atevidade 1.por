
	programa
		{
	
	funcao inicio()
	{
real A
caracter S,resp



		faca
		{

			escreva("altura: ")
			leia(A)



			faca 
			{
			escreva("sexo: ")
			leia(S)
			se(S!='m' e S!='M' e S!='F' e S!='f')
			{
		   escreva("sexo invalido ","\n")
	        
	       
				
			}
			
			}enquanto(S!='m' e S!='M' e S!='F' e S!='f')
	
	
	  se(S=='m' ou S=='M')
	  	{
	
	escreva("peso ideal para voce é ",(72.7*A)-58)
	  	
	  	}
	  senao se(S=='f' ou S=='f')
	  	{
	
	escreva("peso ideal pra voce é ", (62.1*A)-44.7 )
	
		}

		faca
		{

	escreva("Deseja continuar S/N? ")
	leia(resp)
	
	enquanto(resp!='S' e resp!='s' e resp!='N' e resp!='n')
		{
			escreva ("Resposta invalida")
		}


	
		}enquanto(resp!='S' e resp!='s' e resp!='N' e resp!='n')
	}enquanto (resp =='S' ou resp=='s')

		
	}
}



/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 278; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */