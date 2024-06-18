<?php
session_start();

// Simulando o tipo de usuário
// Valores possíveis: 'guest' (visitante), 'user' (usuário comum), 'admin' (administrador)
// Em um cenário real, essa informação viria do banco de dados após o login do usuário.
if (!isset($_SESSION['user_type'])) {
    $_SESSION['user_type'] = 'admin'; // Padrão é 'guest'   Usuario é 'user'    Administrador é 'admin'
}

// Variável para armazenar o tipo de usuário
$user_type = $_SESSION['user_type'];
?>



<?php if ($user_type == 'guest'): ?>
    <li class="login-button"><a href="login.php"><b>LOGIN</b></a></li>
    <?php elseif($user_type == 'user'): ?>
        <li class="login-button"><a href="logout.php"><b>PERFIL</b></a></li>
        <li class="login-button"><a href="logout.php"><b>LOGOUT</b></a></li>
        <?php if ($user_type == 'admin'): ?>
            <li class="nav-item"><a href="lista_cliente.php" class="nav-link"><b>CLIENTES</b></a></li>
            <li class="nav-item"><a href="lista_produto.php" class="nav-link"><b>PRODUTOS</b></a></li>
    <?php endif; ?>
<?php endif; ?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paixão churros | Delivery</title>
    <link rel="shorcut icon" href="../imagens/logo-black.jpeg">

    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/modo-dark.css">
    <link rel="stylesheet" href="../css/menu-mobile.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body>
    <header id="topo">
        <nav class="nav-bar">

            <div class="logo">
                <a href="index.php">
                    <img class="imagem-logo" src="../imagens/logo-black.jpeg" alt="logo da loja" width="130px">
                </a>
            </div>

            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="index.php" class="nav-link"><b>HOME</b></a></li>
                    <li class="nav-item"><a href="#contato" class="nav-link"><b>CONTATO</b></a></li>
                    <li class="nav-item"><a href="#sobre-nos" class="nav-link"><b>SOBRE NÓS</b></a></li>
                    <li class="nav-item"><a href="cardapio.php" class="nav-link"><b>MENU</b></a></li>

                    <?php if ($user_type == 'guest'): ?>
                        <li class="nav-item"><a href="cadastro.php" class="nav-link"><b>CADASTRO</b></a></li>
                        <li class="login-button"><a href="login.php"><b>LOGIN</b></a></li>

                    <?php else: ?>
                        <li class="login-button"><a href="logout.php"><b>LOGOUT</b></a></li>
                    <?php endif; ?>
                    <!--<li class="nav-item">
                        <div class="dark-icone">
                            <i id="item-lua" class="fa-solid fa-moon"></i>
                        </div>
                    </li>-->
                </ul>

                <div>
                    <div class="mobile-menu-icon">
                        <button onclick="menuShow()">
                            <img class="icon" src="../imagens/menu_white_36dp.svg">
                        </button>
                    </div>

                    <div class="dark-icone">
                        <i id="item-lua" class="fa-solid fa-moon"></i>
                    </div>
                </div>

                <div>
                    <img src="../imagens/profile.png" class="user-pic" onclick="toggleMenu()">
                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <?php if ($user_type == 'admin'): ?>
                                <div class="usuario-admin">
                                    <a href="lista_cliente.php" class="sub-menu-link">Clientes</a>
                                    <a href="lista_produto.php" class="sub-menu-link">Produtos</a>
                                </div>
                            <?php endif; ?>

                            <hr>

                            <a href="#" class="sub-menu-link">
                                <img src="">
                                <p>Perfil</p>
                                <span>></span>
                            </a>

                            <a href="#" class="sub-menu-link">
                                <img src="../imagens/help.png">
                                <p>Meus pedidos</p>
                                <span>></span>
                            </a>

                            <a href="#" class="sub-menu-link">
                                <img src="../imagens/logout.png">
                                <p>Sair</p>
                                <span>></span>
                            </a>



                                <a href="login.php">Fazer Login</a>
                                <a href="cadastro.php">Realizar Cadastro</a>

                        </div>
                    </div>
                </div>
            </div>
        

            <div class="mobile-menu">
                <ul>
                    <li class="nav-item"><a href="index.php" class="nav-link"><b>HOME</b></a></li>
                    <li class="nav-item"><a href="#contato" class="nav-link"><b>CONTATO</b></a></li>
                    <li class="nav-item"><a href="#sobre-nos" class="nav-link"><b>SOBRE NÓS</b></a></li>
                    <li class="nav-item"><a href="cardapio.php" class="nav-link"><b>MENU</b></a></li>
                    <li class="nav-item"><a href="cadastro.php" class="nav-link"><b>CADASTRO</b></a></li>
                    <li class="login-button"><a href="login.php"><b>LOGIN</b></a></li>
                </ul>
            </div>
        </nav>

    </header>

    <main class="body-home">
        <div id="container" class="container-home">

            <div class="portada">
                <a href="cardapio.php">
                    <marquee>
                        
                    </marquee>
                </a>
            </div>
    
            <h1>PROMOÇÕES</h1>
    
           <section class="minimenu">
                <div class="itens-menu">
                    <div>
                        <img class="imagem-produtos" src="../imagens/churrocopo.jpeg" alt="Copo com churros">
                        <div class="info">
                            <h3>CHURROS DA FELICIDADE</h3>
                            <p>Nosso queridinho é viciante, você precisa provar essa delícia,
                            churro espanhol crocantes e sequinhos passados no açúcar e canela,
                            8 churros, acompanha copinho de doce de leite e confeitos de sua escolha<p>
                            <div class="promo">
                                <p>R$25,00</p>
                                <span>R$30,00</span>
                            </div>    
                        </div>
                    </div>
                </div>
    
                <div class="itens-menu">
                    <div>
                        <img class="imagem-produtos" src="../imagens/recheios.jpeg" alt="5 churros recheados">
                        <div class="info">
                            <h3>CHURROS RECHEADOS</h3>
                            <p> 5 Churros tradicionais passados em açúcar e canela, recheados com doce de leite,
                                brigadeiro ou misto.<p>
                            <div class="promo">
                                <p>R$40,00</p>
                                <span>R$50,00</span>
                            </div>    
                        </div>
                    </div>
                </div>
    
                <div class="itens-menu">
                    <div>
                        <img class="imagem-produtos" src="../imagens/churrodocedeleite.jpeg" alt="Churro de doce de leite">
                        <div class="info">
                            <h3>CHURRO TRADICIONAL DOCE DE LEITE</h3>
                            <p>Churro individual, recheado com nosso gostoso doce de leite,
                            passado no açúcar e canela.<p>
                            <div class="promo">
                                <p>R$8,00</p>
                                <span>R$10,00</span>
                            </div>    
                        </div>
                    </div>
                </div>
    
                <div class="itens-menu">
                    <div>
                        <img class="imagem-produtos" src="../imagens/Chur-vete.jpeg" alt="Churros com sorvete">
                        <div class="info">
                            <h3>CHUR-VETE</h3>
                            <p>Uma criação perfeita para surprender você que gosta de uma explosão
                                de sabores! Ele têm tudo que você gosta: churro espanhol,
                                brigadeiro caseiro, 100g de sorvete, nutella e amendoim!</p>
                            <div class="promo">
                                <p>R$24,00</p>
                                <span>R$28,00</span>
                            </div>    
                        </div>
                    </div>
                </div>
           </section>
    
           <h1 id="sobre-nos"> SOBRE NÓS </h1>
           <div class="sobre_nos">
                <p>Bem-vindo à nossa loja online de Delivery, onde a magia dos churros acontece! 
                Nós somos apaixonados por churros feitos com massa artesanal e fresca todos os dias.
                Nossos churros são confeccionados com cuidado e carinho, resultando em uma variedade de recheios irresistíveis, 
                seja chocolate derretido, doce de leite ou até mesmo frutas frescas, temos algo para agradar a todos os paladares.
                Do conforto da sua casa ao agito do escritório, nossas delícias estão prontas para fazer parte dos seus melhores momentos.
                </p>
            </div>
    
            <div class="text_colorido">
            <p> Então, não espere mais! Faça seu pedido e mergulhe na deliciosa experiência. 
                Mal podemos esperar para te surpreender a cada mordida!</p>
            </div>
    
            <div class="button_cardapio">
                <button><a href="cardapio.php"> CONHECER CARDÁPIO </a></button>
            </div>
            
            <div>
                <a class="botao-back-topo" href="#topo">
                    <i id="botao-topo" class="fa-solid fa-circle-up"></i>
                </a>
            </div>
    
        </div>
        
    </main>


    <footer>
        <section>
            <h2 id="contato">NOSSAS REDES PARA CONTATO</h2>

            <div class="contatos">
                <ul>
                    <li><i id="material-icons" class="fa-brands fa-whatsapp"></i> WHATSAPP | (21) 972854384</li>
                    <li><a href="https://instagram.com/churrosechocolates?igshid=MzRlODBiNWFlZA==" target="_blank"><i id="material-icons" class="fa-brands fa-instagram"></i></a> INSTAGRAM | @churrosechocolates</li>
                    <li><a href="https://www.ifood.com.br/delivery/rio-de-janeiro-rj/paixao-chocolate-cacuia/a64d0661-9150-4ce5-b9e6-3cfe2cc848a6?UTM_Medium=share&fbclid=PAAaYfoJqMlEsDA4XdWfRax6jI7beNuEFDNxJnB62Eyq6rLH8BqDROX2kwi0M" target="_blank"><img class="ifood" src="../imagens/ifood.png" alt=""></a> IFOOD | paixão chocolate</li>
                </ul>
            </div>
        </section>
    </footer>

    <script type="text/javascript" src="../javascript/comandos.js"></script>
</body>
</html>