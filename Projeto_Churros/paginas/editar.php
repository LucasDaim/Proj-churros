<?php
include 'conexao.php';

// Verifica se o formulário foi submetido
if (isset($_POST['editar'])) {
    // Recupera os dados do formulário
    $id = $_REQUEST["id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $tel_celular = $_POST["tel_celular"];
    $data_nasc = $_POST["data_nasc"];
    $cep = $_POST["cep"];
    $rua_avenida = $_POST["rua_avenida"];
    $bairro = $_POST["bairro"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];

    // SQL update query
    $sql = "UPDATE clientes SET 
            nome = '{$nome}',
            cpf = '{$cpf}',
            data_nasc = '{$data_nasc}',
            email = '{$email}',
            tel_celular = '{$tel_celular}',
            cep = '{$cep}',
            rua_avenida = '{$rua_avenida}',
            bairro = '{$bairro}',
            numero = '{$numero}',
            complemento = '{$complemento}'
            WHERE id = {$id}";

    // Executa a query
    $res = $conn->query($sql);

    if ($res === true) {
        echo "<script>alert('Editado com sucesso');</script>";
        echo "<script>location.href='lista_cliente.php';</script>";
    } else {
        echo "<script>alert('Não foi possível editar');</script>";
    }
}
?>
