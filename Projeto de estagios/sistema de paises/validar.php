<?php 
	session_start();
	include_once("conexao.php");
	if((isset($_POST['login'])) && (isset($_POST['senha']))){
		$login = mysqli_real_escape_string($con,$_POST['login']);//medida contra sql injection
		$senha = mysqli_real_escape_string($con,$_POST['senha']);
		//$senha = md5;//criptografando a senha
		
		$sql = "SELECT * FROM usuario WHERE login ='$login' && senha ='$senha' LIMIT 1";
		$result = mysqli_query($con,$sql);
		$resultado = mysqli_fetch_assoc($result);
			
		
		
		if(empty($resultado)){
			$_SESSION['loginErro'] = "Usuario ou senha invalida";
			header("location:index.php");
		
			
		}elseif(isset($resultado)){
			$_SESSION['administrador'] = $resultado['administrador'];
			$_SESSION['nome'] = $resultado['nome'];
			header("location:logado.php");
			
		}else{	
		$_SESSION['loginErro'] = "Usuario ou senha invalida";
			header("location:index.php");
	}
		
	}else{	
		$_SESSION['loginErro'] = "Usuario ou senha invalida";
			header("location:index.php");
	}
	
?>