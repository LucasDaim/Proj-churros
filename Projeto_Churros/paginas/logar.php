<?php
session_start();

include 'conexao.php';

if (isset($_POST['submit'])) {
    $usuario = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificação especial de login de administrador
    if ($usuario === 'admin' && $senha === 'admin') {
        $_SESSION['user'] = 'admin';
        $_SESSION['user_type'] = 'admin';
        header('Location: index.php');
        exit;
    }

    // Preparar e vincular
    $stmt = $conn->prepare("SELECT * FROM clientes WHERE email = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user_data = $result->fetch_assoc();

        // Verifica se a senha digitada corresponde à senha no banco de dados
        if (password_verify($senha, $user_data['senha'])) {
            $_SESSION['email'] = $usuario;
            $_SESSION['id'] = $user_data['id'];
            $_SESSION['nome'] = $user_data['nome'];
            $_SESSION['user'] = 'common';
            $_SESSION['user_type'] = 'user';
            header('Location: index.php');
            exit;
        } else {
            echo 'Senha inválida';
        }
    } else {
        echo 'Nome de usuário não encontrado';
    }

    $stmt->close();
}
?>
