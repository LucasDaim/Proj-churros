<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Clientes</title>

    <link rel="shorcut icon" href="../imagens/logo-black.jpeg">

    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/modo-dark.css">
    <link rel="stylesheet" href="../css/menu-mobile.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body class="body-cliente">
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
                    <li class="nav-item"><a href="index.php #contato" class="nav-link"><b>CONTATO</b></a></li>
                    <li class="nav-item"><a href="index.php #sobre-nos" class="nav-link"><b>SOBRE NÓS</b></a></li>
                    <li class="nav-item"><a href="cardapio.php" class="nav-link"><b>MENU</b></a></li>
                    <li class="nav-item"><a href="cadastro.php" class="nav-link"><b>CADASTRO</b></a></li>
                    <li class="login-button"><a href="login.php"><b>LOGIN</b></a></li>
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
                </div>

                <div>
                    <img src="../imagens/profile.png" class="user-pic" onclick="toggleMenu()">
                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src="../imagens/profile.png">
                                <h2>Fulano Beltrano</h2>
                            </div>

                            <div class="usuario-admin">
                                <a href="lista_cliente.php" class="sub-menu-link">Clientes</a>
                                <a href="lista_produto.php" class="sub-menu-link">Produtos</a>
                            </div>

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
        <div class="tabela">

            <?php
                include 'conexao.php';
                $sql = "SELECT * FROM clientes";
                $res = $conn->query($sql);
                $qtd = $res->num_rows;

                if($qtd > 0){
                    print "<table class='tabela-4x4'>";
                    print "<tr>";
                    print "<th> Id  </th>";
                    print "<th> Nome </th>";
                    print "<th> Cpf  </th>";
                    print "<th> Data de nascimento </th>";
                    print "<th>Email </th>";
                    print "<th>Telefone </th>";
                    print "<th>Cep </th>";
                    print "<th>Rua</th>";
                    print "<th>Bairro</th>";
                    print "<th>Numero </th>";
                    print "<th>Complemento </th>";
                    print "<th>sexo </th>";
                    print "<th> Ação </th>";
                    print "</tr>";
                    while($row = $res->fetch_object()){
                        print "<tr>";
                        print "<td>". $row->id . "</td>";
                        print "<td>". $row->nome. "</td>";
                        print "<td>". $row->cpf. "</td>";
                        print "<td>". $row->data_nasc. "</td>";
                        print "<td>". $row->email. "</td>";
                        print "<td>". $row->tel_celular. "</td>";
                        print "<td>". $row->cep. "</td>";
                        print "<td>". $row->rua_avenida. "</td>";
                        print "<td>". $row->bairro. "</td>";
                        print "<td>". $row->numero. "</td>";
                        print "<td>". $row->complemento. "</td>";
                        print "<td>". $row->sexo. "</td>";
                        print "<td> 
                        
                        <button onclick=\"location.href='alterar.php".$row->id."';\" class='btn btn-sucess'> editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='deletar.php".$row->id."'}else{false;}\"> excluir </button>
                        
                        <hr>
                        <br>
                        <hr>

                        <button onclick=\"location.href='teste.php?id=".$row->id."';\" class='btn btn-success'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='deletar.php?id=".$row->id."'}\">Excluir</button>
                      
                        
                        </td>";
                        print "</tr>";
                    }
                    print "</table>";
                    }
                    else{
                        print "<p class='alert alert-danger'>Não existe!</p>";
                    }
                

            ?>

            <div class="pdf">
                <button class="botao-pdf"  id="download-pdf">

            <script>
                document.getElementById('download-pdf').addEventListener('click', function() {
                window.print();
                });
            </script>
                    <div>
                        <i id="icone-pdf" class="fa-solid fa-file-pdf"></i>
                    </div>    
                </button>
            </div>
        </div>
    </main>
   

    <script type="text/javascript" src="../javascript/comandos.js"></script>
</body>
</html>