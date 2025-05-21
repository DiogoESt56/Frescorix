<?php
session_start();
include('conexao.php');

// Verifica se os campos foram enviados
if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$usuario = $_POST['email'];
$senha = $_POST['senha'];

// Consulta com prepared statement
$stmt = $conexao->prepare("SELECT senha FROM criacao_conta WHERE email = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Aqui a senha é comparada como texto puro (inseguro, apenas para teste)
    if ($senha === $user['senha']) {
        $_SESSION['email'] = $usuario;
        header('Location: abaInicial.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: index.php');
        exit();
    }
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}
?>