programa//I=inss,F=numero de fucionarios,SB=salario bruto ,Nome é nome
{
	funcao inicio()
	{
  real F,SB,I,IR,descont=8.0,descontir1=10.0,descontir2=20.0,descontir3=30.0
  inteiro contadorLO,contador1=0,contador2=0,contador3=0,contador4=0
 cadeia nome
contadorLO=0

		
	leia(F)
	
     
	




 	enquanto(contadorLO<F){
 	
 	leia(nome)
	leia(SB)
 		
  I=SB * (100 - descont) / 100
  
	 se(SB<=1500) {
	
		escreva(nome," isento seu salario bruto ","R$",SB,"\n","nao atingiu o teto para o desconto IR ","\n","Desconto do INSS 8% ",SB-I,"\n","salario Liquido ",I,"\n")
			contador4=contador4+1
	 	
	 }
	 
	 
	 se(SB>=1501 e SB<=3000){

		IR=SB * (100 - descontir1) / 100
	 	
	 	escreva(nome," seu salario bruto ","R$",SB,"\n","10% Sera descontado para o IR ",I-IR,"\n","Desconto do INSS 8% ",SB-I,"\n","salario Liquido ",IR=SB * (100 - descontir1) / 100,"\n")
				contador1=contador1+1


			
	 	
	 }se(SB>=3001 e SB<=7000){

	 	IR=SB * (100 - descontir2) / 100

        	escreva(nome," seu salario bruto ","R$",SB,"\n","20% Sera descontado para o IR ",I-IR,"\n","Desconto do INSS 8% ",SB-I,"\n","salario Liquido ",IR=SB * (100 - descontir2) / 100,"\n")  
			contador2=contador2+1

	 	
	 }se(SB>7000){

			IR=SB * (100 - descontir3) / 100
	 	
		escreva(nome," seu salario bruto ","R$",SB,"\n","30% Sera descontado para o IR ",I-IR,"\n","Desconto do INSS 8% ",SB-I,"\n","salario Liquido ",IR=SB * (100 - descontir3) / 100,"\n")
		
			contador3=contador3+1


	 	
	 }
	 
	
contadorLO=contadorLO+1

 	}


	


escreva("Quantidade de funcionários isentos de IR ",contador4,"\n")

escreva("Quantidade de funcionários que tiveram 10% de IR ",contador1,"\n")

escreva("Quantidade de funcionários que tiveram 20% de IR ",contador2,"\n")

escreva("Quantidade de funcionários que tiveram 30% de IR ",contador3,"\n")

	}
}
	




/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 1780; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */