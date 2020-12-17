<?php	
  session_start();

 if($_SESSION['administrador'] != 1 ) {
	 header("Location: comum.php");
	 
	 }

include_once("conexao.php")

?>






<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos/stilo.css">
<meta charset="utf-8">
<title>SPA</title>
</head>
<nav id="menu">
    <ul>
        <li><a href="#">Paises</a></li>
		<li><a href="sair.php">Sair</a></li>
    </ul>
</nav>
<h1>Lista de paises</h1>
<?php 
$result_pais = "SELECT * FROM paises";
$resultado_pais=mysqli_query($con,$result_pais);//row é linha
while($row_pais = mysqli_fetch_assoc($resultado_pais)){
	echo "ID: ".$row_pais['id']."<br>";
	echo "Pais: ".$row_pais['nome']."<br>";
	echo "Sigla: ".$row_pais['sigla']."<br>";
	echo "Gentilico: ".$row_pais['gentilico']."<br><hr>";
}
 ?>
<div id="botao1">
<form method="POST" action="cadastroinfo.php">
<input type="submit" value="Cadastrar"><br>
</form>
</div>
<div id="botao2">
<form method="POST" action="apagar.php"><br>
<input type="submit" value="Apagar">
</form>
</div>
<div id="botao3">
<form method="POST" action="editar.php"><br>
<input type="submit" value="Editar">
</form>
</div>




<body>
</body>
</html>
