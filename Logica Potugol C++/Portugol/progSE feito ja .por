/*
 * Ler um número e informar se ele é: 
 * - POSITIVO: quando o número for maior que 0 (zero) ou 
 * - NÃO POSITIVO.
 */

programa
{
	funcao inicio()
	{
		inteiro N, V1, V2
		 

		escreva("Digite um número 1: ")
		leia(V1)
		escreva("Digite um número 2: ")
		leia(V2)
		N=V1+V2

		se (N>0)
		{
			escreva(N," é positivo\n")
		}
		senao
		{
			escreva(N," não é positivo\n")
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 384; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */