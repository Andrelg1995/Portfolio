﻿<?php 
session_start();
include_once('conexao.php')
?>
<html>
<head>
<title></title>
<script type="text/javascript">
function loginsuccessfully() {
setTimeout("window.location='paises1.php'", 3000);
	
}
</script>
</head>
<body>
<?php 

$nome =$_POST['nome'];
$sigla =$_POST['sigla'];
$gentilico =$_POST['gentilico'];





$sql = "INSERT INTO paises(nome, sigla, gentilico) VALUES('$nome', '$sigla', '$gentilico')";
if (mysqli_query($con, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($con);


?>

</body>
</html>
