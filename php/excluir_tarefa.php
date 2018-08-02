<?php
include 'conexao.php';

$idtarefas = $_GET['idtarefas'];

$sql = 'delete from tarefas where idtarefas = '.$idtarefas.'';

mysqli_query($conexao, $sql);

mysqli_close($conexao);
header('location:../lista/home.php');
?>