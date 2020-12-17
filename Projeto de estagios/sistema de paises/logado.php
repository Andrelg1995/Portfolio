<?php 

 session_start();
 include_once("conexao.php");
 if(!isset($_SESSION["login"]) ||  !isset($_SESSION["senha"])) {
	
	 }
	 

	
?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos/stilo.css">
<meta charset="utf-8">
<title>SPA</title>
</head>
<nav id="menu">
    <ul>
        <li><a href="paises1.php">Paises</a></li>
    </ul>
</nav>
<div id="nome">
<h1><?php echo ' Bem vindo(a): '.$_SESSION['nome'] ?></h1>
</div>



<body>
</body>
</html>
