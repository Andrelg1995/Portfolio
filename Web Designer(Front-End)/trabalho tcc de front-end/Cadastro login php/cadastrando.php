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
<title></title>
<script type="text/javascript">
function loginsuccessfully() {
setTimeout("window.location='login.php'", 3000);
	
}
</script>
</head>
<body>
<?php 
$nome =$_POST['nome'];
$cidade =$_POST['cidade'];
$email =$_POST['email'];
$senha =$_POST['senha'];
$sql = mysql_query("INSERT INTO usoario(nome, cidade, email, senha) VALUES('$nome', '$cidade', '$email', '$senha')");

echo "<center>cadastrado com exito! Agrade um momento.</center>";
echo "<script>loginsuccessfully()</script>";
?>

</body>
</html>
