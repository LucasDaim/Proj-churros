<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/modo-dark.css">
    <link rel="shorcut icon" href="../imagens/logo-black.jpeg">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body>
    <header>
        <nav class="nav-bar-simples">
            <div class="logo">
                <a href="home.php">
                    <img class="imagem-logo" src="../imagens/logo-black.jpeg" alt="logo da loja" width="130px">
                </a>
            </div>
        </nav>
    </header>

    <main class="body-login">
        <div id="container" class="container-login">

            <div class="botoes-topo-tela-login">
                <a id="botao-voltar" href="home.php"><i class="fa-solid fa-left-long"></i></a>
                <i id="item-lua" class="fa-solid fa-moon"></i>
            </div>
            
            <form method="post" action="#">
                <h1 class="titulo">Login</h1>
                
                <fieldset>
                    <label for="nome"><strong>Nome de usuário</strong></label>
                    <div class="entrada_dados">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" nome="usuario" id="email-validacao" placeholder="Usuário" required>
                    </div>
    
                    <label for="senha"><strong>Senha</strong></label>
                    <div class="entrada_dados">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" nome="senha" id="senha-validacao" placeholder="Senha" required>
                    </div>
    
                    <div class="botao-login">
                        <button class="botao-primario" type="submit" onclick="validacao()">Enviar</button>
                        ou
                        <button class="botao-secundario"><a href="cadastro.php">Cadastrar Novo Usuario</a></button>
                    </div>
                    
                </fieldset>
            </form>
        </div>    
    </main>

    <script type="text/javascript" src="../javascript/comandos.js"></script>
</body>
</html>