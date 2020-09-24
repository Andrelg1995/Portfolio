<?php 
$host = "localhost";
$user = "root";
$pass = "";
$banco = "marcacao";
$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<html>
<head>
<title></title>
<script type="text/javascript">
function loginsuccessfully() {
setTimeout("window.location='painel.php'", 2000);
	
}
</script>
</head>
<body>
<?php 
$nome =$_POST['nome'];
$cidade =$_POST['cidade'];
$email =$_POST['email'];
$fone =$_POST['fone'];
$sql = mysql_query("INSERT INTO paciente(nome, cidade, email, fone) VALUES('$nome', '$cidade', '$email', '$fone')");

echo "<center>Marcado com exito!Agrade um momento. Pra ser direcionado </center>";
echo "<script>loginsuccessfully()</script>";
?>

</body>
</html>