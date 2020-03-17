<?php
require 'config.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>FatCounter</title>
    <meta name="viewport" contant="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</head>
<body>


<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-1">
        <a class="navbar-brand" href="./">
            <img src="assets/images/logo1.png" alt="FatCounter">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSite">
            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])): ?>
                    <li class="nav-item">
                        <a id="cabecalho-index" class="nav-link" href="#">Olá, nome</a>
                    </li>
                    <li class="nav-item">
                        <a id="cabecalho-index" class="nav-link" href="sair.php">Sair</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a id="cabecalho-index" class="nav-link" href="login.php">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a id="cabecalho-index" class="nav-link" href="register.php">Registrar-se</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</div>