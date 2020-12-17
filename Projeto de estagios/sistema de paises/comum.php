<?php	
 session_start();
 if(!isset($_SESSION["login"]) ||  !isset($_SESSION["senha"])) {
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

<body>
</body>
</html>
