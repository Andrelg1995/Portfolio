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





<!doctype html>
<html>
<head>
<a href="renaissance.ttf"></a>
<link rel="stylesheet" type="text/css" href="cadastrodfini.css">
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







<div id="form">

<h1 style="text-align:center;color:#E643F2;">Marcação Definitiva</h1>
<center style="margin:10px;"><form name="andre" method="post" action="cadastrandodfini.php">
Nome:<input style="background-color:#BA6AD8;border-radius:10px;" type="text" name="nome" required><br><br>
Cidade:<input style="background-color:#BA6AD8;border-radius:10px;" type="text" name="cidade" required><br><br>
E-mail:<input style="background-color:#BA6AD8;border-radius:10px;"type="e-mail" name="email" required><br><br>
Fone:<input style="background-color:#BA6AD8;border-radius:10px;"type="text" name="fone"><br><br>
<input style="margin:-10px 0 0 40px;padding:0;" type="submit" value=""></center>

</form>

</div>









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
