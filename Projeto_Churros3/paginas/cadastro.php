<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    
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
    <main class="body-cadastro">
        <!-- versão padrão -->
        <div id="container" class="container-cadastro">

            <!-- LADO ESQUERDO -->
            <div class="texto-login">
                <div class="botoes-topo-tela-cadastro">
                    <a id="botao-voltar" href="home.php"><i class="fa-solid fa-left-long"></i></a>
                    <i id="item-lua" class="fa-solid fa-moon"></i>
                </div>

                <div class="centro-texto">
                    <h1> Criar Conta</h1>
                    <p>Já possui uma conta?</p>
                    <a class="login" href="login.php">Login</a>
                </div>
            </div>
            
            <!-- LADO DIREITO -->
            <div class="cadastro">
                <form class="formulario" method="POST" action="?page=salvar">
                <input type="hidden" name="acao" value="cadastrar">
                    <div class="entrada-dados-cadastro">
                        <label for="nome_completo"><strong>Nome completo</strong></label>
                        <input type="text" name="nome" id="nome" >
                    </div>
                    
                    <div class="entrada-dados-cadastro">
                        <label for="cpf"><strong>CPF</strong></label>
                        <input type="text" name="cpf" id="cpf" placeholder="Ex: 123.456.789-00"   required>
                    </div>
                                    
                    <div class="entrada-dados-cadastro">
                        <label for="data_nascimento"><strong>Data de nascimento</strong></label>
                        <input type="date" name="data_nasc" id="data_nasc" placeholder="dd/mm/aaaa" required>
                    </div>
        
                    <div  class="entrada-dados-cadastro">
                        <label for="email"><strong>E-mail</strong></label>
                        <input type="email" name="email" id="email" required>
                    </div>

                    <div class="entrada-dados-cadastro">
                        <label for=""><strong>Senha</strong></label>
                        <input type="password" name="senha" id="senha"  required>
                        <span class="aviso">*A senha deve conter 8 caracteres</span>
                    </div>
                    
                    <div class="entrada-dados-cadastro">
                        <label for=""><strong>Confirmar Senha</strong></label>
                        <input type="password" name="conf_senha" id="conf_senha"  required>
                        <span class="aviso">*A senha deve conter 8 caracteres</span>
                    </div>
    
                    <div class="caixaGenero">
                        <h6>Sexo</h6>
                        <div class="boxInputs">
                            <div class="generoInput">
                                <input type="radio" id="masculino" name="genero">
                                <label for="masculino">Masculino</label>
                            </div>
                            <div class="generoInput">
                                <input type="radio" id="feminino" name="genero">
                                <label for="feminino">Feminino</label>
                            </div>
                            <div class="generoInput">
                                <input type="radio" id="outro" name="genero">
                                <label for="outro">Outro</label>
                            </div>
    
                            <div class="generoInput">
                                <input type="radio" id="nao-responder" name="genero">
                                <label for="outro">Prefiro não responder</label>
                            </div>
                        </div>
                    </div>
        
                    <div  class="entrada-dados-cadastro">
                        <label for="tel_celular"><strong>Telefone Celular</strong></label>
                        <!--Localizar o erro--><input type="tel" name="tel_celular" id="tel_celular" placeholder="(+55)xx-xxxxxxxxx"  required>
                    </div>
        
                    <!--Endereço CEP-->
                    <div class="entrada-dados-cadastro">
                        <label for="cep"><strong>CEP</strong></label>
                        <input type="text" name="cep" id="cep" placeholder="Ex: 21900-500"   required>
                        <button type="button" onclick="buscarEndereco()">Buscar</button>
                    </div>
                    
                    <div class="entrada-dados-cadastro">
                        <label for="rua_avenida"><strong>Rua/Avenida</strong></label>
                        <input type="text" name="rua_avenida" id="logradouro">
                    </div>
                    
                    <div class="entrada-dados-cadastro">
                        <label for="bairro"><strong>Bairro</strong></label>
                        <input type="text" name="bairro" id="bairro">
                    </div>
        
                    <div class="entrada-dados-cadastro">
                        <label for="numero"><strong>Número</strong></label>
                        <input type="text" name="numero" id="numero" max="6" placeholder="258" required>
                    </div>
                    
                    <div class="entrada-dados-cadastro">
                        <label for="complemento"><strong>Complemento</strong></label>
                        <input type="text" name="complemento" id="complemento" placeholder="casa" required>
                    </div>
                    
                    
        
                    <div class="botao-cadastro">
                        <button class="botao-primario" type="submit">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="../javascript/comandos.js"></script>
</body>
</html>