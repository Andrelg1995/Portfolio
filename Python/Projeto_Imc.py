#projeto de programa IMC







print("Vamos Medir seu IMC?")
nome = str(input("Informe Seu Nome!: "))
altura = float(input("Infome sua altura nesse formato 1.70!: "))
peso = float(input("Informe seu peso!: "))
idade = int(input("Informe sua idade!: "))

valaltura = altura*altura
resultado = peso/valaltura

print("Seu IMC é: {:.2f} ".format(resultado))

if idade <= 60 and resultado >= 40:
    print("Obesidade grau 3 Procure um medico Seu Imc:{:.2f} ".format(resultado))
elif idade <= 60 and resultado >= 35:
    print("Obesidade grau 2 Procure um medico Seu Imc:{:.2f} ".format(resultado))
elif idade <= 60 and resultado >= 30:
    print("Obesidade grau 1 Procure um medico Seu Imc:{:.2f} ".format(resultado))
elif idade <= 60 and resultado >= 25:
    print("Sobrepeso Procure um medico Seu Imc:{:.2f} ".format(resultado))
elif idade <= 60 and resultado >= 18.5:
    print("Peso normal Seu Imc:{:.2f} ".format(resultado))
elif idade <= 60 and resultado < 18.5:
    print("Abaixo do peso Seu Imc:{:.2f} ".format(resultado))
elif idade > 60 and resultado >= 27:
    print("Idoso Obesidade Procure um medico Seu Imc:{:.2f} ".format(resultado))
elif idade > 60 and resultado >= 22:
    print("Idoso peso normal Seu Imc:{:.2f} ".format(resultado))
elif idade > 60 and resultado < 22:
    print("Idoso abaixo peso Seu Imc:{:.2f} ".format(resultado))






