<html>
    <head>
        <title> Cadastro de Usuários </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        <div id="caixaPrincipal">
            <header id="header_cadastro"> 
                Cadastro de Usuários
            </header>
            <form name="frmUsuarios" method="post" action="../php/cadastrar_usuario.php">
                
                <div class="linha">
                    <input type="text" name="nome" class="caixasTextos" required placeholder="Nome">
                </div>
                
                <div class="linha">
                    <input type="email" name="email" class="caixasTextos" required placeholder="Email">
                </div>
                
                <div class="linha">
                    <input type="password" name="senha" class="caixasTextos" required placeholder="Senha">
                </div>
                
                <div class="linha">
                    <!-- Pula linha -->
                </div>
                
                <div class="linha">
                    <input type="submit" name="btnSalvar" value="Cadastrar" id="btnSalvar">
                </div>
                
            </form>
            
            <footer id="footer_cadastro">
                Desenvolvido por Binary Tech Corp 
            </footer>
        </div>
    
    </body>
</html>