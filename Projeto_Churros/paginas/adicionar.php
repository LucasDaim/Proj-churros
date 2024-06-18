<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $tel_celular = $_POST["tel_celular"];
    $senha = $_POST["senha"]; // Não aplique hash diretamente aqui, faremos no próximo passo
    $data_nasc = $_POST["data_nasc"];
    $cep = $_POST["cep"];
    $rua_avenida = $_POST["rua_avenida"];
    $bairro = $_POST["bairro"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $sexo = $_POST["sexo"];

    // Hash da senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Prepared statement para prevenir SQL injection
    $stmt = $conn->prepare("INSERT INTO clientes (nome, cpf, data_nasc, email, senha, tel_celular, cep, rua_avenida, bairro, numero, complemento, sexo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssss", $nome, $cpf, $data_nasc, $email, $senha_hash, $tel_celular, $cep, $rua_avenida, $bairro, $numero, $complemento, $sexo);

    if ($stmt->execute()) {
        echo "<script>alert('Cadastro realizado com sucesso');</script>";
        echo "<script>location.href='index.php';</script>";
    } else {
        echo "<script>alert('Não foi possível cadastrar');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
