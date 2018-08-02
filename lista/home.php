
<!doctype html>
<html lang="pt-br">
    <head>
        <title> Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <link rel="stylesheet" href="css/style.css">
        <script src="../js/javascript.js"></script>
        <script src="../js/jquery.js"></script>
        <script>
		function excluir(id){
			window.location.href = "../php/excluir_tarefa.php?idtarefas="+id;
			}
			
		function adicionar(){
			$("#ul").append("<li><div><form action='../php/cadastrar_tarefa.php' method='post'><input type='text' name='titulo'><input type='submit'><br><textarea name='descricao'></textarea></form></div></li>");
		}
        </script>
    </head>

    <body>
        <main>
        	<?php
        	session_start();
        	?>
        	<p>Bem vindo(a), <?php echo($_SESSION['usuario']->nome); ?></p>
        	<a href="../php/sair.php" >Sair</a>
            <div id="lista">
			<input type="button" value="+" onclick="adicionar();">
				<?php
					include '../php/conexao.php';
					$idusuario = $_SESSION['usuario']->idusuario;
					$resultado = $conexao->query("select * from tarefas where idusuario = ".$idusuario."");
					echo("<ul id='ul'>");
					while($tarefa = mysqli_fetch_object($resultado)){
						echo("
							<li>
								<div>
									<form action='../php/editar_tarefa.php?idtarefas=".$tarefa->idtarefas."' method='post'>
										<input type='text' name='titulo' value='".$tarefa->titulo."'><input type='button' value = 'X'onclick='excluir(".$tarefa->idtarefas.");'><input type='submit'><br>
										<textarea name='descricao'>".$tarefa->descricao."</textarea>
									</form>
								</div>
							</li>
						");
					}
					echo("</ul>");
					mysqli_close($conexao);
				?>
            </div>
        </main>
    </body>
</html>