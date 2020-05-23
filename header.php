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
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
</head>
<body>

<?php if (isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])): ?>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="areaRestrita.php">
            <img src="assets/images/logo1.png" alt="FatCounter">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSite">
            <nav class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a style="color: #000000" class="nav-link" href="perfil.php">Bem vindo(a)
                        <?php
                        require 'classes/Usuario.php';
                        $a = new Usuario();
                        $nameuser = $a->getNamelogin();
                        echo $nameuser['nome_usuario']; ?>
                    </a></li>
                <li class="nav-item">
                    <a style="color: #000000" class="nav-link" href="sair.php">Sair</a>
                </li>
            </nav>
        <?php else: ?>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="./">
                    <img src="assets/images/logo1.png" alt="FatCounter">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSite">
                    <nav class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a id="cabecalho-index" class="nav-link" href="login.php">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a id="cabecalho-index" class="nav-link" href="register.php">Registrar-se</a>
                        </li>
                    </nav>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
