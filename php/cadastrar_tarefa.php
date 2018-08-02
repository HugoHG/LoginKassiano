<?php
include 'conexao.php';
session_start();

$idusuario = $_SESSION['usuario']->idusuario;
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

$sql = 'insert into tarefas (titulo, descricao, idusuario) values ("'.$titulo.'", "'.$descricao.'", "'.$idusuario.'");';

mysqli_query($conexao, $sql);

mysqli_close($conexao);

header('location:../lista/home.php');
?>