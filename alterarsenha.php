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

if (isset($_POST['senha']) && !empty($_POST['senha'])) {
    $senha = addslashes($_POST['senha']);

    if ($_POST['senha'] != $_POST['confsenha']) {
        ?>
        <div class="flash">
            Novas senhas não coincidem!
        </div>
        <?php
    } elseif ($_POST['senha'] == $_POST['confsenha']) {

        $a->editSenha($senha, $_SESSION['id_usuario']);
        ?>
        <div class="flash">
            Senha editada com sucesso!
        </div>
        <?php
    }
}
if (isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])) {
    $info = $a->getNamelogin($_SESSION['id_usuario']);
} else {
    ?>
    <script type="text/javascript">window.location.href = "configuracoes.php";</script>
    <?php
    exit;
}
?>

<link rel="stylesheet" media="screen"
      href="https://d34yn14tavczy0.cloudfront.net/assets/sass/controllers/account-aba6b2a2376db7aab948e58e7e42c06ea3e028f2495b04733338f8927b1c797e.css"/>
<link rel="stylesheet" media="all"
      href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" media="all"
      href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-awesome/css/font-awesome-ie7.min.css"/>
<link rel="stylesheet" media="all"
      href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-mfizz/font-mfizz.css"/>

<body class="layout-1" data-lang="pt" class=&quot;body-header&quot;>

<style media="screen">
    /* imported from simba main app. do not modify manually */
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

        <div id="main">

            <h1 class="main-title">Alterar senha</h1>

            <form method="post">

                <div class="block-1">

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">
                            Senha atual:
                        </label>
                        <div class="col-sm-10">
                            <input type="password" readonly class="form-control-plaintext" name="atual"
                                   id="inputPassword"
                                   value="<?php echo $info['senha']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">
                            Nova senha:
                        </label>
                        <div class="col-sm-10">
                            <input type="password" name="senha" class="form-control" id="inputPassword" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">
                            Confirmar senha:
                        </label>
                        <div class="col-sm-10">
                            <input type="password" name="confsenha" class="form-control" id="inputPassword">
                        </div>
                    </div>
                </div>

                <p class="cont-1">
                    <input type="submit" class="button" value="Salvar alterações"/>
                </p>

            </form>
        </div>
    </div>
</div>

