
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
<img src="../images/foto4.jpg">
</div>


<div id="linhas">
<h1 style="text-align: center;">Rugas Linhas e Envelhecimento da Pele</h1>
<p>Os tratamentos mais eficientes são os que associam diversos procedimentos, 
abrangendo todos os causadores e agravantes da rugas e já trabalhando a prevenção-
 das mesmas.
O tratamento de rugas, linhas e envelhecimento da pele, po
de ser feito pelos procedimentos não cirúrgicos de Laser de CO2 Fracionado, 
Radiofrequência ( Hooke), Luz Intensa Pulsada, Indução Percutânea de Colágeno 
– Dermaroller, Carboxiterapia, Massagens, Peelings, Hidratação Facial, 
Hidratação Corporal, Nutrição Facial, Preenchimentos de Ácido Hialurônico, 
Aplicação de Botox® , Reidratação Subcutânea com Ácido Hialurônico e 
Intradermoterapias específicas.
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
