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
if (isset($_POST['id_usuario']) && !empty($_POST['id_usuario'])) {
    $a->excluirConta($_POST['id_usuario']);
}
?>
<script type="text/javascript">window.location.href = "index.php";</script>
<?php
exit;
?>

<link rel="stylesheet" media="screen"
      href="https://d34yn14tavczy0.cloudfront.net/assets/sass/controllers/account-aba6b2a2376db7aab948e58e7e42c06ea3e028f2495b04733338f8927b1c797e.css"/>
<link rel="stylesheet" media="screen"
      href="https://d34yn14tavczy0.cloudfront.net/assets/sass/account/confirm_delete-e1c72821b441b114e85f05a94361a0222d5691050a937a09c4b21a902f408d93.css"/>
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

            <div id="settings">

                <h1 class="main-title">Excluir conta</h1>

                <div class="block-1">
                    <div class="header">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">ANTES DE PROSSEGUIR:
                                </h5>
                            </div>
                            <div class="panel-body">
                                <p>
                                    Estou ciente de que isso irá excluir permanentemente minha conta MyFitnessPal, que
                                    minhas informações não poderão ser recuperadas e que esta ação não pode ser
                                    desfeita.
                                </p>
                                <p>
                                    Estou ciente de que perderei permanentemente o acesso a todos os dados associados ao
                                    meu perfil, incluindo dados inseridos de alimentos, exercícios, passos, peso, notas,
                                    postagens do feed de notícias e fotos.
                                </p>
                                <p>
                                    Estou ciente de que somente minha conta do MyFitnessPal será excluída e esta ação
                                    não afetará qualquer outra conta Under Armour que eu possa ter.
                                </p>
                            </div>
                        </div>

                        <p class="confirm">Tem certeza que deseja excluir sua conta?</p>
                        <form method="post">
                            <p class="buttons">
                                <input type="submit" name="delete" value="Excluir minha conta"
                                       class="button delete-button"/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="configuracoes.php">
                                    <input type="button" role="button" name="cancel" value="Cancelar"
                                           class="button style-2"/>
                                </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

