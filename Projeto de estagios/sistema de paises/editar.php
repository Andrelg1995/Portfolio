<?phpsession_start();
session_start();
 if($_SESSION['administrador'] != 1 ) {
	 header("Location:comum.php");
	 exit;
	 }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos/stilo.css">
	<title>editar</title>
</head>
<body>
<div id="cadastro" style="width: 14%;
    margin: 0 auto;">
<h1>Apagar pais</h1>
<!--formulario de login-->

<form method="POST" action="proc_edit_usuario.php">
	<p>id: </p><input type="text" name="id">
	<p>Nome: </p><input type="text" name="nome">
	<p>Silga: </p><input type="text" name="sigla">
	<p>Gentilico: </p><input type="text" name="gentilico">
	<br><br>
	<input type="submit" value="editar">
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