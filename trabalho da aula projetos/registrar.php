<?php
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="container-logo d-flex justify-content-center">
            <img src="assets/logo.jpg" alt="logo" class="logo-header">
        </div>
    </header>
    <form action="registro.php" method="POST" class="text-center mt-4">
        <input id="nome" type="text" name="Nome_completo" placeholder="Coloque seu nome completo">
    <br>
        <input id="senha" type="password" name="senha" placeholder="Coloque sua senha">
    <br>
        <input id="email" type="text" name="email" placeholder="Coloque seu Email">
    <br>
        <input id="endereco" type="text" name="endereco" placeholder="Coloque seu endereco">
    <br>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>