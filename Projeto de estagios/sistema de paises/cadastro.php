<?php
	session_start();
	include_once("conexao.php");
?>
<html>
<head>
<title></title>
<script type="text/javascript">
function loginsuccessfully() {
setTimeout("window.location='paises1.php'", 2000);
	
}
</script>
</head>
<body>
<center><?php 





$nome =$_POST['nome'];
$sigla =$_POST['sigla'];
$gentilico =$_POST['gentilico'];

$sql = "INSERT INTO paises(nome, sigla, gentilico) VALUES('$nome', '$sigla', '$gentilico')";
if (mysqli_query($con, $sql)) {
      echo "Gravado";
	   echo '<script type="text/javascript">',
     'loginsuccessfully();',
     '</script>'
;
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?></center>
</body>
</html>
