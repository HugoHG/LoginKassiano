<?php
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = 'select * from usuario where email = "'.$email.'" and  senha = "'.$senha.'";';
$resultado = mysqli_query($conexao, $sql);
$usuario = mysqli_fetch_object($resultado);

if($usuario->idusuario){
	mysqli_close($conexao);
	session_start();
	$_SESSION['usuario'] = $usuario;
	header('location:../lista/home.php');
}else{
	mysqli_close($conexao);
	header('location:../index.php');
}

?>