<?php
include 'conexao.php';

$idtarefas = $_GET['idtarefas'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

$sql = 'update tarefas set titulo = "'.$titulo.'", descricao = "'.$descricao.'" where idtarefas = '.$idtarefas.'';

mysqli_query($conexao, $sql);

mysqli_close($conexao);

header('location:../lista/home.php');
?>