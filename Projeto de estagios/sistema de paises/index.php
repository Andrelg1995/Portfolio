
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos/stilo.css">
	<title>Login</title>
</head>
<body>
<div id="conteiner" style="width: 14%;
    margin: 0 auto;">
<h1>Login</h1>
<!--formulario de login-->

<form method="POST" action="validar.php">
	<p>Login:</p><input type="text" name="login">
	<p>Senha:</p><input type="password" name="senha"><br><br>
	<input type="submit" value="Entrar">
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