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

if (isset($_POST['nome_usuario']) && !empty($_POST['nome_usuario'])) {
    $nome = addslashes($_POST['nome_usuario']);

    if ($_POST['atual'] == $_POST['nome_usuario']) {
        ?>
        <div class="flash">
            Usuario igual ao anterior!
        </div>
        <?php
    } elseif ($_POST['atual'] != $_POST['nome_usuario']) {

        $a->editUsuario($nome, $_SESSION['id_usuario']);
        ?>
        <div class="flash">
            Usuario editado com sucesso!
        </div>
        <?php
        header('Refresh:0');
    }
}
if (isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario'])) {
    $info = $a->getNamelogin($_SESSION['id_usuario']);
} else {
    ?>
    <script type="text/javascript">window.location.href = "login.php";</script>
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
<link rel="stylesheet" media="all" href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-mfizz/font-mfizz.css"/>

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

<br>

<div id="wrap">

    <div id="content">

        <div id="main">

            <h1 class="main-title">Alterar nome de usuário</h1>

            <form method="post">
                <div class="block-1">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">
                            Nome de usuário atual:
                        </label>

                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" name="atual" id="staticEmail"
                                   value="<?php echo $info['nome_usuario']; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">
                            Novo nome de usuário:
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nome_usuario" id="inputPassword" autofocus>
                        </div>
                    </div>
                </div>
                <p class="cont-1">
                    <input type="submit" class="button" value="Alterar nome de usuário"/>
                </p>
            </form>
        </div>
    </div>
</div>