

<?php 
$host = "localhost";
$user = "root";
$pass = "";
$banco = "consulta";
$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<html>
<head>
<title></title>
<script type="text/javascript">
function loginsuccessfully() {
setTimeout("window.location='../index.html'", 3000);
	
}
</script>
</head>
<body>
<?php 
$nome =$_POST['nome'];
$email =$_POST['email'];
$tel =$_POST['tel'];

$sql = mysql_query("INSERT INTO novos(nome, email, tel) VALUES('$nome', '$email', '$tel')");

echo "<center>Formulario enviado com exito! Agrade um momento.</center>";
echo "<script>loginsuccessfully()</script>";
?>

</body>
</html>
































