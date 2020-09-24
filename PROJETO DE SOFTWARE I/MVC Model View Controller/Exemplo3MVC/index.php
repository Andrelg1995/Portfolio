<?php   
require "controller/inicioController.php";
$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "index";

$iniciactrl = new inicioController();


switch($pagina){
		
		case'index':
		$iniciactrl -> Index();
		break;
		
		case'login':
		$iniciactrl -> Login();
		break;
		
		case'painel':
		$iniciactrl -> Painel();
		break;
		
		
}

?>