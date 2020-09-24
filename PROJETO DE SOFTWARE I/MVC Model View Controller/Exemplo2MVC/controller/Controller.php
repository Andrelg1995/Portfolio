<?php 
require "model/Model.php";

class Controller
{
	
	public function Index()
	{
		$iniciamodel = new model;
		$dados = $iniciamodel->ApresentaDados();
		include "view/View.php";
		
		
		
	}
	
	
	
}
?>

