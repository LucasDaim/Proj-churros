     <?php
        include 'conexao.php';
        
        $sql = "SELECT * FROM clientes WHERE id=".$_REQUEST["id"];
         $res = $conn->query($sql);
         $row = $res->fetch_object();
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    </head>
    <body>
   

            <div class="cadastro">
                <form class="formulario"  action="editar.php" method="post" >
                    <div class="entrada-dados-cadastro">
                        <label for="nome_completo"><strong>Nome completo</strong></label>
                        <input type="text" name="nome" id="nome_completo" value="<?php print $row->nome?>" required-->
                    </div>
                    
                    <div class="entrada-dados-cadastro">
                        <label for="cpf"><strong>CPF</strong></label>
                        <input type="text" name="cpf" id="cpf" onkeypress="mascaraCPF()" value="<?php print $row->cpf?>"> <!-- maxlength="14" autocomplete="off" placeholder="Ex: 123.456.789-00" pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}"  required-->
                    </div>
                                    
                    <div class="entrada-dados-cadastro">
                        <label for="data_nascimento"><strong>Data de nascimento</strong></label>
                        <input type="date" name="data_nasc" id="data_nascimento" value="<?php print $row->data_nasc?>" required>
                    </div>
        
                    <div  class="entrada-dados-cadastro">
                        <label for="email"><strong>E-mail</strong></label>
                        <input type="email" name="email" id="email" value="<?php print $row->email?>" required>
                    </div>
    
                    <div  class="entrada-dados-cadastro">
                        <label for="tel_celular"><strong>Telefone Celular</strong></label>
                        <!--Localizar o erro--><input type="tel" name="tel_celular" id="tel_celular" value="<?php print $row->tel_celular?>"><!-- onkeypress="mascaraTelefone()" maxlength="14" placeholder="(xx)xxxxx-xxxx" pattern="[0-9]{2}-[0-9]{9}" required-->
                    </div>
        
                    <!--Endereço CEP-->
                    <div class="entrada-dados-cadastro">
                        <label for="cep"><strong>CEP</strong></label>
                        <input type="text" onblur="buscarEndereco()" name="cep" id="cep" placeholder="Ex: 21900-500" value="<?php print $row->cep?>" ><!-- pattern="\d{5}-?\d{3}"  required-->
                        <!--<button type="button" onclick="buscarEndereco()">Buscar</button>-->
                    </div>
                    
                    <div class="entrada-dados-cadastro">
                        <label for="rua_avenida"><strong>Rua/Avenida</strong></label>
                        <input type="text" name="rua_avenida" id="logradouro" value="<?php print $row->rua_avenida?>">
                    </div>
                    
                    <div class="entrada-dados-cadastro">
                        <label for="bairro"><strong>Bairro</strong></label>
                        <input type="text" name="bairro" id="bairro" value="<?php print $row->bairro?>">
                    </div>
        
                    <div class="entrada-dados-cadastro">
                        <label for="numero"><strong>Número</strong></label>
                        <input type="text" name="numero" id="numero" max="6" placeholder="258" value="<?php print $row->numero?>" required>
                    </div>
                    
                    <div class="entrada-dados-cadastro">
                        <label for="complemento"><strong>Complemento</strong></label>
                        <input type="text" name="complemento" id="complemento" placeholder="casa"value="<?php print $row->complemento?>" required>
                    </div>
                    
        
                    <div class="botao-cadastro">
                        <button class="botao-primario" type="submit" name="submit" value="editar"> Editar </button>
                    </div>
</body>
</html>