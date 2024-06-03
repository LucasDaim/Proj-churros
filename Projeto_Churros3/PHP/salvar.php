<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $email = $_POST["email"];
            $tel_celular = $_POST["tel_celular"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];
            $cep = $_POST["cep"];
            $rua_avenida = $_POST["rua_avenida"];
            $bairro = $_POST["bairro"];
            $numero = $_POST["numero"];
            $complemento = $_POST["complemento"];
            $sexo = $_POST["sexo"];


            $sql = "INSERT INTO clientes (nome, cpf,tel_celular,cep, email, senha, data_nasc,rua_avenida,bairro,numero,complemento,sexo ) VALUES ( '{$nome}','{$cpf}','{$tel_celular}','{$cep}','{$rua_avenida}','{$bairro}','{$numero}','{$complemento}','{$sexo}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conn->query($sql);
              if($res==true){
                print "<script>alert('Cadastro com sucesso');</script>";
                print "<script>location.href='?page=sucesso';</script>";
            }
            else {
                print "<script>alert('Não foi possível cadastrar');</script>";
            }
            break;
          }
?>