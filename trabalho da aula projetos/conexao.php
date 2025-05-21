<?php
$host = 'localhost';

$user = 'root';

$senha = '';

$bd = 'trabalho_de_projetos';

$conexao = new mysqli($host, $user, $senha, $bd);

if ($conexao->connect_error) {
    echo '';
} else {
    echo '';
}
?>