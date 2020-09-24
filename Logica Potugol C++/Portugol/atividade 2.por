programa
{
	
	funcao inicio()
	{
real A
caracter S
		escreva("altura: ")
		leia(A)
		escreva("sexo: ")
		leia(S)
		enquanto(S!='m' e S!='M' e S!='F' e S!='f')
		{
	   escreva("sexo invalido ","\n")
        escreva("sexo: ")
        leia(S)
			
		}
		


  se(S=='m' ou S=='M')
  	{

escreva("peso ideal para voce é ",(72.7*A)-58)
  	
  	}
  senao se(S=='f' ou S=='f')
  	{

escreva("peso ideal pra voce é ", (62.1*A)-44.7 )

	}



		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 444; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */