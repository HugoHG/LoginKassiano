<?php
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = 'insert into usuario (nome, email, senha) values ("'.$nome.'", "'.$email.'", "'.$senha.'");';

mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location:../index.php");
?>