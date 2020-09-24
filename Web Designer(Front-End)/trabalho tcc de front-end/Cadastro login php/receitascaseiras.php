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
<link rel="stylesheet" type="text/css" href="receitascaseiras.css">
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



<div id="coteinerquadro">
	<div class="quadro">
        <h1>5</h1>
		<center><h4>Maio</h4></center>
		
	</div>
   <div class="texto">
   <p style="color:#8b1dbe;">A Luz Intensa Pulsada é uma tecnologia que emite flashes de calor intenso, 
capazes de aquecer para destruir, de forma controlada, t
anto o bulbo do pelo quanto o vaso sanguíneo que o mantêm vivo,
 possibilitando uma depilação seletiva, específica, controlada e  <a href="3.php" style="text-decoration:none;">Continue lendo.......</a> </p>
   </div>
   
   
   	<div class="quadro">
        <h1>4</h1>
		<center><h4>Maio</h4></center>
		
	</div>
   <div class="texto">
   <p style="color:#8b1dbe;">Rugas Linhas e Envelhecimento da Pele Os tratamentos mais eficientes são os que associam diversos procedimentos, 
abrangendo todos os causadores e agravantes da rugas e já trabalhando a prevenção <a href="4.php" style="text-decoration:none;">Continue lendo........</a> </p>
   </div>
   
   
   
   	<div class="quadro">
        <h1>3</h1>
		<center><h4>Maio</h4></center>
		
	</div>
   <div class="texto">
   <p style="color:#8b1dbe;">Como é feita a aplicação do botox A toxina é injetável - aplicada na terminação nervosa da região de tratamento <a href="2.php" style="text-decoration:none;">Continue lendo.......</a>  </p>
   </div>
   
   </div>
   
   
   
   
   
   
   
   
   
	<div style="clear:both"></div>	
</div>













</div><!--conteudo-->


<div id="rodape">
 <div id="formulario">
 <h5>receba novidade no e-mail</h5>
 <form method="post" action="clientesemal.php">
 
 <input type="email" placeholder="email" name="email" required>
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
