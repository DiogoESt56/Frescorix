<?php
include 'conexao.php';

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$nome_completo = $_POST['Nome_completo'];
$usuario = $_POST['email'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

$stmt = $conexao->prepare("INSERT INTO criacao_conta (senha, email, endereco, Nome_completo) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $senha, $usuario, $endereco, $nome_completo);

if ($stmt->execute()) {
    header('Location: index.php');
    exit();
}
$stmt->close();
$conexao->close();
?>
