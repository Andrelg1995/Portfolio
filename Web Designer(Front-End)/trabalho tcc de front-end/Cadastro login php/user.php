<?php 
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadstro";
$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

<html>
<head>
<title>atenticando usoario</title>

<script type="text/javascript">
function loginsuccessfully() {
setTimeout("window.location='painel.php'", 5000);
	
}

function loginfailed() {
	
	setTimeout("window.location='login.php'", 5000);
	
	}

</script>
</head>
<body>
<?php 
$email=$_POST['email'];
$senha=md5$_POST['senha'];
$sql = mysql_query("SELECT * FROM usoario WHERE email = '$email' and senha = '$senha'") or die(mysql_error());
$row = mysql_num_rows($sql);
if($row > 0 ) {
	session_start();
	$_SESSION['email']=$_POST['email'];
	$_SESSION['senha']=$_POST['senha'];

	echo "você foi logado com exito.Aguarde um instante";
	echo "<script>loginsuccessfully()</script>";
} else {
	echo "nome de usoario ou senha invalido,Aguarde um instante para tentar novamente";
	echo "<script>loginfailed()</script>";
	
	}

?>

<br><br>

<center><h1>Aguarde ser Direcionado<h1></center>
</body>
</html>