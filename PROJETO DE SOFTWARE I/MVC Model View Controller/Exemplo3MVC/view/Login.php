

<!DOCTYPE html>
<html lang="pt-br">
  <head>
	  <style type="text/css">
         h2,h1 {background-image: linear-gradient(to right, #ff0d0d, #0062cc);}
		  
		 input[type=submit]{
			  
	             background-image: linear-gradient(to right, #ccff9d, #0062cc);
                    font-size: 23px;
    				margin: 0;
    				padding: 0;
			 		color: #ff0000;
		  }
		  input[type="text"],input[type=password]{
			  
			         height: 30px;
		 }
         </style>
    <title>Autenticação</title>
    <meta charset="utf-8">
  </head>
  <body style="background-color: #343a40cc;">
        <h1><center> Bem vindo a pagina de login</center></h1>
		<center><form action="" method="post"><!--coloquei como post pt me irrita ve minha informaçoes na barra meu toque me fez tirar o get e por post-->
	  Usuario: <input type="text" name="usuario" placeholder="Usuário" required>
			Senha: <input type="password" name="senha" placeholder="Digite sua senha "  required>
			<input type="submit" value="entrar">
	  </form></center>
	  <!--Prof tomei a liberdade de fazer umas zoeirinhas kkkkk-->
	  
	  
	  <br>
	   <br>
	   <br>
	   <br>
	  <!--vai ter trabalho pra corrigir esse kkkk-->
	   <br>
	   <br>
	   <br>
	  
	  <!--aqui fiz um formulario que funciona para entrar no painel kkk esse vai ficar get se nao nao funciona -->
	  <center><h1>Bem vindo ao caminho certo pra sua pagina</h1></center>
	  <center><h2>A baixo digite a pagina desejada e aperte em entrar</h2></center>
	  <center><form action="" method="get"><!--aqui desse jeito ele entra na pagina so digitar painel, funciona dom index tbm kkkkk-->
	  Usuario: <input type="text" name="pagina" placeholder="digite a pagina" required>
			<input type="submit" value="entrar">
	  </form></center>
  </body>
</html>