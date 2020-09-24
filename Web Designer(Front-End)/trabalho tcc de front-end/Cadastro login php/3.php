

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
<link rel="stylesheet" type="text/css" href="1.css">
<meta charset="utf-8">
<title>Cline vida-dicas</title>
</head>

<body>
<div id="geral">
	<div id="cabalho">
		<div id="titulo">
			<h1>Cline Vida</h1>
			
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
    </li>
</ul>
</div><!--menu-->

<div id="corpo"><!--conteudo-->





<div id="coteinerfoto">

<div id="foto">
<img src="../images/foto1.jpg">
</div>


<div id="linhas">
<h1 style="text-align: center;">Luz Intensa Pulsada</h1>
<p>A Luz Intensa Pulsada é uma tecnologia que emite flashes de calor intenso, 
capazes de aquecer para destruir, de forma controlada, t
anto o bulbo do pelo quanto o vaso sanguíneo que o mantêm vivo,
 possibilitando uma depilação seletiva, específica, controlada e,
 portanto mais segura do que os lasers tradicionais. 
O nosso equipamento especificamente possibilita uma sessão mais rápida, 
confortável e praticamente indolor, 
uma vez que sua área de aplicação é resfriada e até cinco vezes maior do que a dos tradicionais 
equipamentos do mercado.
</p>
</div>





</div>






<div style="clear:both"></div>











</div><!--conteudo-->


<div id="rodape">
 <div id="formulario">
 <h5>receba novidade no e-mail</h5>
 <form><input type="email" placeholder="email" required>
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
