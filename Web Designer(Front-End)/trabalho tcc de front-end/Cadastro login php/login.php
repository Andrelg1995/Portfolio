<!doctype html>
<html>
<head>
<a href="renaissance.ttf"></a>
<link rel="stylesheet" type="text/css" href="login.css">
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
		<a href="painel.php">Painel</a>
        <a href="../contato.html">Contato</a>
		 
    </li>
</ul>
</div><!--menu-->

<div id="corpo"><!--conteudo-->

<div id="form">
<h1 style="text-align:center;color:#fff;">Login</h1>
<center style="margin:10px;"><form name="loginform" method="post" action="user.php">

<a style="color:#fff";>E-mail:</a><input style="color:#000;border-radius:10px;" type="e-mail" name="email"  required/><br><br>
<a style="color:#fff";>Senha:</a><input style="color:#000;border-radius:10px;"  type="password" name="senha" required /><br><br>
<input style="margin:-10px 0 0 40px;padding:0;" type="submit" value="" />

</form></center>

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
