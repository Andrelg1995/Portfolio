<?php 
require "model/UsuarioModel.php";

class inicioController
{
	//chama as paginas 
	public function Index()
	{
		include "view/Index.php";	
	}
	
	public function Login(){
		
		include "view/Login.php";	
		
	}
	
	public function Painel(){
		//cria um methodo e exibe a informação
		$iniciamodel = new UsuarioModel();
		$usuario = $iniciamodel -> UsuarioLogado();
		include "view/Painel.php";
	}
	
}
?>

