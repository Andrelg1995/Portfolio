
<?php 
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadstro";
$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<?php 
 session_start();
 if(!isset($_SESSION["email"]) ||  !isset($_SESSION["senha"])) {
	 header("Location: login.php");
	 exit;
	 }

?>






<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "devmedia";
$user = "root";
$pass = "";
// conecta ao banco de dados
$con = @mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT especialidade, nome, telefone, email FROM usoario");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>

<html>
<head>
<a href="renaissance.ttf"></a>
<link rel="stylesheet" type="text/css" href="emailmendicos.css">
<meta charset="utf-8">
<title>Painel de Controle CliniVida</title>
</head>

<body>
<div id="geral">
	<div id="cabalho">
		<div id="titulo">
			<h1>CliniVida</h1>
			
            <h2>Clinica estética</h2>
     
        </div><!--titulo-->

	</div><!--cabecalho-->

<div id="menu">
<ul>
    <li>
        <a href="../index.html">Inicio</a>
        <a href="../localizacao.html">Localização</a>
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastre-se</a>
        <a href="../contato.html">Contato</a>
		 <a href="logaut.php">Sair</a>
        
       
    </li>
</ul>
</div><!--menu-->


<div id="corpo"><!--conteudo-->


<?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
<center style="border-radius:50%;color:#fff;">
<div id="medicos">
			<p style="background-color:#d506b9;">Nome:<?=$linha['nome']?> <br>
			Telefone:<?=$linha['telefone']?> <br> 
			E-mail:<?=$linha['email']?><br>
			Especialidade:<?=$linha['especialidade']?></p></div>
			</center>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysql_fetch_assoc($dados));
	// fim do if 
	}
?>



</div><!--conteudo-->


<div id="rodape">
 <div id="formulario">
 <h5>receba novidade no e-mail</h5>
 <form method="post" action="clientesemal.php"><input type="email" placeholder="email" name="email" required>
 <input type="submit" value="">
 </form>
 <div style="clear:both"></div> 
 </div><!--formula-->
 <div id="sociais">
 <h5>nos siga nas redes sociais</h5>
 <img src="facebook.png"  alt=""/>
 <img src="instagram.png" alt=""/>
 <img src="twitter.png"  alt=""/>
 </div>
 <div style="clear:both"></div>


 
 
 
 
 
</div><!--rodape-->

<div id="creditos">
 <p>André Garcia -Todos os direitos rervados.2016</p>
 </div>

</div><!--caba a geral-->






</body>
</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>