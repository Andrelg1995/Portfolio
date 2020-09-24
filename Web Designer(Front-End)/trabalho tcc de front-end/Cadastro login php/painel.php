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
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet' type='text/css'>
<a href="renaissance.ttf"></a>
<link rel="stylesheet" type="text/css" href="painel.css">
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

<div id="colunalateral">
<p><a href="ebook.php"target="_blank">E-book</a></p>
<p><a href="cadastrodfini.php"target="_blank">Marcação Definitiva</a></p>



</div>

<div id="centro">

<h2>7 Dicas de tratamentos complementares</h2>




<h3>Manthus</h3>
<p>O que promete: combate à celulite e redução de medidas
corporais (abdome, culote, pernas, glúteos, braços).

O que é: equipamento computadorizado 
composto por potente 
emissor de ultrassom, associado a
 uma corrente elétrica 
suave (corrente estereodinâmica),
 que desnatura as células gordurosas. 
Quantas sessões: dez (duas ou três vezes por semana). </p>

<h3>Phydias</h3>

<p>O que promete: melhora do tônus muscular. 
O que é: um aparelho de eletroestimulação computadorizado que combate a flacidez muscular. Antes de ser usado em estética, era recomendado para reabilitação de atletas. Por meio dos eletrodos, acontece uma estimulação muscular que melhora o tônus dos músculos. 
Quantas sessões: no mínimo, dez com frequência de duas vezes por semana. </p>

<h3>Acupuntura Estética Corporal</h3>

<p>O que promete: redução da gordura localizada e perca de medidas, além de melhorar o aspecto da estria. 
O que é: uma técnica da acupuntura tradicional associada a outras técnicas com o objetivo de devolver o equilíbrio energético às estruturas corporais, resultando em bem-estar e autoestima. É uma opção muito eficaz, praticamente indolor e livre de efeitos colaterais. Sua diferença está na avaliação do paciente como um todo, pois problemas estéticos normalmente são resultados de desequilíbrios nos órgãos internos. 
Quantas sessões: dez.<p>
<h3>Depilação a Laser Diodo</h3>

<p>O que promete: indicado para diminuição de pelos de qualquer região do corpo. 
O que é: um método de alta efetividade e pode ser utilizado sobre praticamente todas as zonas corporais e faciais. O tratamento é rápido, seguro e eficaz, apresentando diversas vantagens em relação aos sistemas tradicionais como cera, lâmina, luz pulsada, entre outros. O laser de diodo atinge a melanina diretamente na raiz do pelo, podendo ser empregado inclusive em pessoas de pele morena. Quantas sessões: depende da quantidade de pelos que a pessoa possui.</p>
<h3>Massagem Modeladora</h3>

<p>O que promete: entre os principais benefícios estão à melhora da oxigenação dos tecidos, redução de medidas e da celulite. 
O que é: técnica que utiliza manobras rápidas e intensas sobre a pele, utilizando pressão por meio de movimentos de amassamento e deslizamento. Atinge a camada mais profunda, quebrando a cadeia de gordura para posteriormente serem eliminadas por meio da corrente sanguínea. 
Quantas sessões: no mínimo, dez.</p>
<h3>Cellutec</h3>

<p>O que promete: atua no tratamento da celulite e gordura localizada, eliminando os depósitos de gordura decorrente da circulação deficiente, mobilizando as cápsulas de gordura no tecido para serem absorvidas pela corrente sanguínea e linfática. 
O que é: aparelho de endermoterapia vibratória que utiliza varias técnicas de pressão vibratória, percussão e massagem. Possui ação giratória (directional stroking motion) que combina forças verticais e paralelas ao corpo, obtendo-se um tratamento seguro e eficiente, sem causar dor ou traumas, contra a celulite. 
Quantas sessões: dez.</p>
<h3>Hertix</h3>

<p>O que promete: diminui a flacidez da pele, previne o aparecimento de rugas e melhora o aspecto da celulite. 
O que é: um gerador de radiofrequência que, por meio do efeito da corrente elétrica alternada de alta frequência, induz calor nos tecidos dérmicos. O objetivo do tratamento é aumentar a temperatura do tecido entre 40° C a 42º C e mantê-la. Esse aquecimento do tecido proporciona o aumento da circulação local e estímulo à formação de novo colágeno. "O tratamento é indolor, não invasivo, o que faz com que a rotina diária das pacientes não seja alterada. É um tratamento possível de ser realizado em qualquer época do ano. 
Quantas sessões: no mínimo, dez.</p>
<div style="clear:both"></div>
</div>

<div id="coluna">
<p><a href="emailmendicos.php" target="_blank">E-mail dos Medicos</a></p>
<p><a href="receitascaseiras.php"target="_blank">Dicas</a></p>
</div>

















<div style="clear:both"></div>
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
 <p>André Garcia -Todos os direitos reservados.2016</p>
 </div>

</div><!--caba a geral-->






</body>
</html>
