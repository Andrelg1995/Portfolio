

<?php 
$host = "localhost";
$user = "root";
$pass = "";
$banco = "mensagem";
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
$email =$_POST['email'];
$tel =$_POST['tel'];
$msg =$_POST['msg'];

$sql = mysql_query("INSERT INTO contato(nome, email, tel, msg) VALUES('$nome', '$email', '$tel', '$msg')");

echo "<center>Formulario enviado com exito! Agrade um momento.</center>";
echo "<script>loginsuccessfully()</script>";
?>

</body>
</html>
































