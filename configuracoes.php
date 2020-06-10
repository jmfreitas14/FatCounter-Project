<?php
require_once 'header.php';
require_once 'menu-dentro.php';
?>
<?php
if (empty($_SESSION['id_usuario'])) {
    ?>
    <script type="text/javascript">window.location.href = "login.php";</script>
    <?php
    exit;
}
?>
<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);

    $a->editEmail($email, $_SESSION['id_usuario']);
    ?>
    <div class="flash">
        E-mail editado com sucesso!
    </div>
    <?php
}
if (isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])) {
    $info = $a->getNameLogin($_SESSION['id_usuario']);
} else {
    ?>
    <script type="text/javascript">window.location.href = "configuracoes.php";</script>
    <?php
    exit;
}
?>
<?php
if (isset($_POST['delete']) && !empty($_POST['delete'])) {
    $excluir = addslashes($_POST['delete']);


    $a->excluirConta($excluir, $_SESSION['id_usuario']);
    header("location: sair.php");
}
?>

<link rel="stylesheet" media="screen"
      href="https://d34yn14tavczy0.cloudfront.net/assets/sass/controllers/account-aba6b2a2376db7aab948e58e7e42c06ea3e028f2495b04733338f8927b1c797e.css"/>
<link rel="stylesheet" media="all"
      href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" media="all"
      href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-awesome/css/font-awesome-ie7.min.css"/>
<link rel="stylesheet" media="all" href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-mfizz/font-mfizz.css"/>
<link rel="stylesheet" media="screen"
      href="https://d34yn14tavczy0.cloudfront.net/assets/account/settings-7bcbcdcb441f29942a99e3cf010bc621600a1a2f5f93b65cd599eea05e727a3d.css"/>

<body class="layout-1" data-lang="pt" class=&quot;body-header&quot;>

<style media="screen">
    .globalTopNav-2GCw3 {
        background: #f0f0f0;
        border-bottom: 1px solid #d2d2d2;
        height: 30px;
        overflow: hidden
    }

    .globalTopNav-2GCw3 > ul {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin: 0;
        padding-left: 10px;
        list-style-type: none
    }

    .globalTopNav-2GCw3 > ul > li {
        border-right: 1px solid #d2d2d2
    }

    .globalTopNav-2GCw3 > ul > li > a {
        display: inline-block;
        padding: 6px 12px
    }
</style>

<div id="wrap">

    <div id="content">

        <div id="main" class="anti-aliased">
            <div id="settings">
                <div class="flex">
                    <div class="flex-1">
                        <h1 class="main-title">Configurações de conta</h1>
                        <br>
                        <br>
                        <br>
                        <form method="post">
                            <h1 class="main-title" style="font-size: 12pt;">Alterar e-mail:</h1>
                            <div class="block-1">
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">
                                        E-mail:
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" class="form-control"
                                               id="inputPassword"
                                               value="<?php echo $info['email']; ?>">
                                    </div>
                                </div>

                            <p class="cont-1">

                                <input type="submit" class="button" value="Salvar alterações"/>

                            </p>

                        </form>
                        <br>
                        <br>
                        <h1 class="main-title" style="font-size: 12pt;">Excluir conta</h1>

                        <div class="block-1">
                            <div class="header">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">ANTES DE PROSSEGUIR:
                                        </h5>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            Estou ciente de que isso irá excluir permanentemente minha conta FatCounter,
                                            que
                                            minhas informações não poderão ser recuperadas e que esta ação não pode ser
                                            desfeita.
                                        </p>
                                        <p>
                                            Estou ciente de que perderei permanentemente o acesso a todos os dados
                                            associados ao
                                            meu perfil, incluindo dados inseridos de alimentos e peso.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <p class="confirm">Tem certeza que deseja excluir sua conta?</p>
                            <form method="post">
                                <p class="buttons">
                                    <input type="submit" name="delete" value="Excluir minha conta"
                                           class="button delete-button"/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="areaRestrita.php">
                                        <input type="button" role="button" name="cancel" value="Cancelar"
                                               class="button style-2"/>
                                    </a>
                                </p>
                            </form>