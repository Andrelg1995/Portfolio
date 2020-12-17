<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sigla = filter_input(INPUT_POST, 'sigla', FILTER_SANITIZE_STRING);
$gentilico = filter_input(INPUT_POST, 'gentilico', FILTER_SANITIZE_STRING);

//echo $nome;


$result_usuario = "UPDATE paises SET nome='$nome',sigla='$sigla',gentilico='$gentilico' WHERE id='$id'";
$resultado_usuario = mysqli_query($con, $result_usuario);

if(mysqli_affected_rows($con)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: paises1.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: editar.php?id=$id");
}
