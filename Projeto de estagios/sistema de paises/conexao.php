<?php 
$host = "127.0.0.1";
$user = "root";
$pass = "";
$DB = "data";

$con = mysqli_connect($host, $user, $pass,$DB);

if(!$con){
	die("Falha na conexao" . mysqli_connect_error());
	
}else{
	//conectado
}





?>