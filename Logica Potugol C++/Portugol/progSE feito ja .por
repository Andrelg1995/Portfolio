/*
 * Ler um n�mero e informar se ele �: 
 * - POSITIVO: quando o n�mero for maior que 0 (zero) ou 
 * - N�O POSITIVO.
 */

programa
{
	funcao inicio()
	{
		inteiro N, V1, V2
		 

		escreva("Digite um n�mero 1: ")
		leia(V1)
		escreva("Digite um n�mero 2: ")
		leia(V2)
		N=V1+V2

		se (N>0)
		{
			escreva(N," � positivo\n")
		}
		senao
		{
			escreva(N," n�o � positivo\n")
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta se��o do arquivo guarda informa��es do Portugol Studio.
 * Voc� pode apag�-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 384; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */