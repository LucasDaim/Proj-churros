<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paixão churros | Delivery</title>

    <link rel="shortcut icon" href="../imagens/logo-black.jpeg">

    <link rel="stylesheet" href="../css/cardapio.css">
    <link rel="stylesheet" href="../css/modo-dark.css">
    <link rel="stylesheet" href="../css/menu-mobile.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
<header id="topo">
        <nav class="nav-bar">

            <div class="logo">
                <a href="home.php">
                    <img class="imagem-logo" src="../imagens/logo-black.jpeg" alt="logo da loja" width="130px">
                </a>
            </div>
            
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="home.php #contato" class="nav-link"><b>CONTATO</b></a></li>
                    <li class="nav-item"><a href="home.php #sobre-nos" class="nav-link"><b>SOBRE NÓS</b></a></li>
                    <li class="nav-item"><a href="cardapio.php" class="nav-link"><b>MENU</b></a></li>
                    <li class="nav-item"><a href="cadastro.php" class="nav-link"><b>CADASTRO</b></a></li>
                    <li class="login-button"><a href="login.php"><b>LOGIN</b></a></li>
                    <li class="nav-item">
                        <div class="dark-icone">
                            <i id="item-lua" class="fa-solid fa-moon"></i>
                        </div>
                    </li>
                </ul>
            </div>

            
            <div class="mobile-menu-icon">
                <button onclick="menuShow()">
                    <img class="icon" src="../imagens/menu_white_36dp.svg">
                </button>

                <div class="dark-icone">
                    <i id="item-lua" class="fa-solid fa-moon"></i>
                </div>
            </div>
        </nav>

        

        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="#contato" class="nav-link"><b>CONTATO</b></a></li>
                <li class="nav-item"><a href="#sobre-nos" class="nav-link"><b>SOBRE NÓS</b></a></li>
                <li class="nav-item"><a href="cardapio.php" class="nav-link"><b>MENU</b></a></li>
                <li class="nav-item"><a href="cadastro.php" class="nav-link"><b>CADASTRO</b></a></li>
                <li class="login-button"><a href="login.php"><b>LOGIN</b></a></li>
            </ul>
        </div>
    </header>

    <main class="main-section">

      <div id="container">
        <h1 class="section-title">Nossas Promoções</h1>

        <section class="container normal-section">
            
            <div class="products-container">

              <div class="product">
                <h3 class="product-title">COMBO DE 12 CHURROS ESPECIAL</h3>
                <img src="../imagens/12-churros-especiais.jpeg" alt="12 churros especiais" class="product-image">
                <p>Este prato incrível é composto por 12 churros espanhóis cuidadosamente elaborados com massa fresca e artesanal, resultando em uma crocância inigualável a cada mordida. Acompanhados de irresistíveis molhos, você terá a escolha entre o rico e suave doce de leite, o chocolate e confeitos para adicionar uma pitada de diversão.</p>
                <div class="product-price-container">
                  <span class="product-price">R$30,00</span>
                  <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                </div>
              </div>

              <div class="product">
                <h3 class="product-title">CHURROS DA FELICIDADE</h3>
                <img src="../imagens/churrocopo.jpeg" alt="churros da felicidade" class="product-image">
                <p>Nosso queridinho é viciante, corre! Você precisa provar essa delícia, churro espanhol crocantes e sequinhos pasados no açúcar e canela, 8 churros, acompanha copinho de doce de leite + granulado colorido.</p>
                <div class="product-price-container">
                  <span class="product-price">R$39,99</span>
                  <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                </div>
              </div>
      
              <div class="product">
                <h3 class="product-title">CHURRO VENEZUELANO</h3>
                <img src="../imagens/venezuelano-misto.jpeg" alt="churro venezuelano" class="product-image">
                <p>Nosso churro espanhol, já experimentou??</p><p>8 deliciosos churros crocantes com banho de doce de leite para você se deliciar.</p>
                <div class="product-price-container">
                  <span class="product-price">R$23,00</span>
                  <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                </div>
              </div>

              <div class="product">
                <h3 class="product-title">COMBO 5 CHURROS TRADICIONAIS</h3>
                <img src="../imagens/card_5chu.jpeg" alt="combo 5 churros tradicionais" class="product-image">
                <p>Churros tradicionais passados em açúcar e canela, recheados de doce de leite/brigadeiro/misto. Uma delícia!</p>
                <div class="product-price-container">
                  <span class="product-price">R$50,00</span>
                  <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
                </div>
              </div>

        </section>
  
        <h1 class="section-title">Produtos</h1>
        
        <section class="container-normal-section">
          <div class="products-container">

            <div class="product">
              <h3 class="product-title">CHURRO GOURMET</h3>
              <img src="../imagens/chrurros-gourmet.jpeg" alt="churros gourmet" class="product-image">
              <p>Churros de massa fresca e artesanal com recheios, cobertura e confeito de sua escolha.</p>
              <div class="product-price-container">
                <span class="product-price">R$14,00</span>
                <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
              </div>
            </div>
  
            <div class="product">
              <h3 class="product-title">CHURRO TRADICIONAL DUPLO NUTELLA</h3>
              <img src="../imagens/churros-nutella.avif" alt="churros de nutella" class="product-image">
              <p>Nosso churro tradicional vêm super cheio de sabor! Ele têm Nutella por dentro e por fora! ( 1 churros duplo ).</p>
              <div class="product-price-container">
                <span class="product-price">R$14,00</span>
                <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
              </div>
            </div>
          
            <div class="product">
              <h3 class="product-title">CHUR-VETE CHOCOLATUDO</h3>
              <img src="../imagens/Chur-vete.jpeg" alt="churvete chocolatudo" class="product-image">
              <p>Uma criação perfeita para surprender você que gosta de uma explosão de sabores! Ele têm tudo que você gosta.</p>
              <div class="product-price-container">
                <span class="product-price">R$28,00</span>
                <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
              </div>
            </div>

            <div class="product">
              <h3 class="product-title">CHURRO TRADICIONAL DOCE DE LEITE</h3>
              <img src="../imagens/churrodocedeleite.jpeg" alt="churvete chocolatudo" class="product-image">
              <p>Churro individual, recheado com nosso gostoso doce de leite, passado no açúcar e canela.</p>
              <div class="product-price-container">
                <span class="product-price">R$10,00</span>
                <button type="button" class="button-hover-background">Adicionar ao carrinho</button>
              </div>
            </div>

          </div>
        </section>
  
        <h1 class="section-title">Carrinho</h1>
        
        <section class="container normal-section">
          
          <table class="cart-table">
            <thead>
              <tr>
                <th class="table-head-item first-col">Item</th>
                <th class="table-head-item second-col">Preço</th>
                <th class="table-head-item third-col">Quantidade</th>
              </tr>
            </thead>
  
            <tbody>
                <!--<tr class="cart-product">
                <td class="product-identification">
                  <img src="images/produto2.png" alt="Miniatura" class="cart-product-image">
                  <strong class="cart-product-title">Miniatura</strong>
                </td>
                <td>
                  <span class="cart-product-price">R$69,90</span>
                </td>
                <td>
                  <input type="number" value="2" min="0" class="product-qtd-input">
                  <button type="button" class="remove-product-button">Remover</button>
                </td>
              </tr>
              <tr class="cart-product">
                <td class="product-identification">
                  <img src="images/poster3.png" alt="3" class="cart-product-image">
                  <strong class="cart-product-title">Poster 3</strong>
                </td>
                <td>
                  <span class="cart-product-price">R$19,99</span>
                </td>
                <td>
                  <input type="number" value="1" min="0" class="product-qtd-input">
                  <button type="button" class="remove-product-button">Remover</button>
                </td>
              </tr> -->
            </tbody>
            <tfoot>
              <tr>
                <td colspan="3" class="cart-total-container">
                  <strong>Total</strong>
                  <span>R$0,00</span>
                </td>
              </tr>
            </tfoot>
          </table>
          <button type="button" class="purchase-button">Finalizar Compra</button>
        </section>
      </div>
    </main>

    <script src="../javascript/carrinho.js"></script>
    <script src="../javascript/comandos.js"></script>
</body>
</html>