<?php 
$host = "localhost";
$user = "root";
$pass = "";
$banco = "clientes";
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
$email =$_POST['email'];

$sql = mysql_query("INSERT INTO novidade(email) VALUES('$email')");

echo "<center>Formulario enviado com exito! Agrade um momento.</center>";
echo "<script>loginsuccessfully()</script>";
?>

</body>
</html>
