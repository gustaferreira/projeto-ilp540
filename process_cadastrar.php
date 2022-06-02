<?php
include("conecta.php");

$nome = $_POST["nome"];
$telefone= $_POST["telefone"];
$senha = $_POST["senha"];

if(!isset($_SESSION)) {
	session_start();
		
	if(isset($_SESSION["id_usuario"])){
		$id = $_SESSION["id_usuario"];
		$location = "Location:logado.php";
		$sql = "UPDATE `usuarios` SET `nome`='$nome', `telefone`='$telefone', `senha`='$senha' WHERE `id`=$id";
	}
	else{
		$email = $_POST["email"];
		$location = "Location:index.php";
		$sql = "INSERT INTO usuarios (`id`, `email`, `nome`, `telefone`, `senha`) VALUES (NULL, '$email', '$nome', '$telefone', '$senha')";
		header($location);
	}
}

try {	
	$conn->exec($sql);		
} catch(PDOException $e) {
	header("Location:telacadastrado.php");
}
$conn = null;
header($location);
     
?>