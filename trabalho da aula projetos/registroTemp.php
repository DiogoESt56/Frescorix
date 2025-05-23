<?php
session_start();
include 'conexao.php'
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistroTemp</title>
    <link rel="stylesheet" href="css/style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container-logo d-flex justify-content-center">
            <img src="assets/logo.jpg" alt="logo" class="logo-header">
        </div>
    </header>
    <div class="loginForm">
        <!-- colocar aqui o registro de temperatura que vai pegar do arduino -->
        <form action="LigaDesliga.php" method="POST" class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Ligar ou desligar</button>
        </form>
        <form action="MediaDaSem.php" method="POST" class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Media da semana</button>
        </form>
        <h5><a href="abaInicial.php">Voltar</a></h5>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>