
<!doctype html>
<html lang="pt-br">
    <head>
        <title> Login </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <link rel="stylesheet" href="lista/css/style.css">
        <script src="js/javascript.js"></script>
        <script src="js/jquery.js"></script>
		<script>
		
		</script>
    </head>

    <body>
       
        <div id="caixaPrincipal">

            <header id="header_login">
                Login
            </header>

            <form name="login" method="POST" action="php/login.php">
                <div class="linha">
                    <input type="text" name="email" placeholder="E-mail" required class="caixasTextos">
                </div>

                <div class="linha">
                    <input type="password" name="senha" placeholder="Senha" required class="caixasTextos">
                </div>    

                <div class="linha">
                    <!-- Pula linha -->
                </div>

                <div class="linha">
                    <input type="submit" name="btnSalvar" id="btnSalvar" value="Entrar">
                </div>    

                <div class="linha">
                    <a href="lista/cadastro.php" id="link_cadastro">
                        Criar conta
                    </a>

                </div>

            </form>

            <footer id="footer_login">
                Desenvolvido por Binary Tech Corp 
            </footer>

        </div>
            

    </body>
</html>