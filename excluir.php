<?php
include("autentica.php");

include("conecta.php");

$id = $_GET["id"];

$sql = "DELETE FROM `usuarios` WHERE `id` = '$id'";

try {	
	$conn->exec($sql);		
} catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

if(!isset($_SESSION)) 
	session_start();
session_destroy();

header("Location:index.php");

?>