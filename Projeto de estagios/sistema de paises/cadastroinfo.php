<?phpsession_start();
session_start();
 if($_SESSION['administrador'] != 1 ) {
	 header("Location: comum.php");
	 exit;
	 }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos/stilo.css">
	<title>Login</title>
</head>
<body>
<div id="cadastro" style="width: 14%;
    margin: 0 auto;">
<h1>Casdastar pais</h1>
<!--formulario de login-->

<form method="POST" action="cadastro.php">
	<p>Nome: </p><input type="text" name="nome">
	<p>Sigla: </p><input type="text" name="sigla">
	<p>Gentilico: </p><input type="text" name="gentilico"><br><br>
	<input type="submit" value="Finaliza cadastro">
</form>
<div id="erros">
<?php if(isset($_SESSIO['loginErro'])){
		echo $_SESSIO['loginErro'];
		unset ($_SESSIO['loginErro']);} 
?>
</div> 

</div> 
</body>
</html>