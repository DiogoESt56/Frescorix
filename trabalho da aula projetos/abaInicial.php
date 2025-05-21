<?php 
session_start(); include 'conexao.php' 
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <header>
            <div class="container-logo d-flex justify-content-center">
                <img src="assets/logo.jpg" alt="logo" class="logo-header">
            </div>
        </header>
        <div class="card" style="width: 100%; align-items: center;">
            <div class="row gy-2 gx-3 align-items-center">
                <div class="col-auto">
                <button>domingo</button>
                <p>temp</p>
                </div>
                <div class="col-auto">
                <button>segunda</button>
                <p>temp</p>
                </div>
                <div class="col-auto">
                <button>terça</button>
                <p>temp</p>
                </div>
                <div class="col-auto">
                <button>quarta</button>
                <p>temp</p>
                </div>
                <div class="col-auto">
                <button>quinta</button>
                <p>temp</p>
                </div>
                <div class="col-auto">
                <button>sexta</button>
                <p>temp</p>
                </div>
                <div class="col-auto">
                <button>sabado</button>
                <p>temp</p>
                </div>
            </div>
        </div>
        <form action="logado.php" method="POST" class="text-center mt-4">
            <div class="switch__container">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Ligar ou desligar</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><input id="switch-shadow"
                                class="switch switch--shadow" type="checkbox" />
                            <label for="switch-shadow"></label>
                        </h6>
                    </div>
                </div>
            </div>
        </form>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div class="botao">
                    <button type="button" class="btn btn-primary">Registrar temp.</button>
                </div>
                <h6>Temperatura</h6>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">16°</option>
                    <option value="2">17°</option>
                    <option value="3">18°</option>
                    <option value="4">19°</option>
                    <option value="5" selected>20°</option>
                    <option value="6">21°</option>
                    <option value="7">22°</option>
                    <option value="8">23°</option>
                    <option value="9">24°</option>
                    <option value="10">25°</option>
                    <option value="11">26°</option>
                    <option value="12">27°</option>
                    <option value="13">28°</option>
                    <option value="14">29°</option>
                    <option value="15">30°</option>
                    <option value="16">32°</option>
                </select>
                <div class="temporizadorInicio">
                    <h6>Temporizador de inicio</h6>
                    <div class="timerInicio">
                    <input type="time" name="timerInicio" id="inicio">
                    </div>
                </div>
                <div class="temporizadorTermino">
                    <h6>temporizador de termino</h6>
                    <div class="timerTermino">
                    <input type="time" name="timerTermino" id="termino">
                    </div>
                </div>
            </div>
        </div>
        <form action="index.php">
            <h5><a href="index.php">Voltar</a></h5>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </body>

    </html>