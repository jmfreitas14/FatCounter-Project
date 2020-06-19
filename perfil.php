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

<br>

<link rel="stylesheet" media="screen"
      href="https://d34yn14tavczy0.cloudfront.net/assets/sass/controllers/user-d2dd634d25efdeb0f2ed29b0cc1b4d6d2237a54e7c8d26e4ffa63a9c16f9ba63.css"/>
<link rel="stylesheet" media="all"
      href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" media="all"
      href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-awesome/css/font-awesome-ie7.min.css"/>
<link rel="stylesheet" media="all" href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-mfizz/font-mfizz.css"/>

<body class="layout-5" id="profile-view" data-lang="pt" class=&quot;body-header&quot;>

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

        <div id="main">

            <h2 class="main-title">Meu perfil</h2>
            <div class="container px-lg-3">
                <div class="row mx-lg-n3">
                    <div class="col user-info">
                        <p style="font-size: 12pt; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; color: #0f73ab;">
                            Nome de perfil: <?php echo $nameuser['nome_usuario']; ?></p>
                        <?php if (isset($nameuser['idade'])): ?>
                            <p style="font-size: 12pt; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; color: #0f73ab;">
                                Idade: <?php echo $nameuser['idade']; ?></p>
                        <?php else: ?>
                            <p style="font-size: 12pt; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; color: #0f73ab;">
                                Idade: 18</p>
                        <?php endif; ?>
                        <?php if (isset($nameuser['sexo'])): ?>
                            <p style="font-size: 12pt; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; color: #0f73ab;">
                                Sexo: <?php echo ucfirst($nameuser['sexo']); ?></p>
                        <?php else: ?>
                            <p style="font-size: 12pt; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; color: #0f73ab;">
                                Sexo: Masculino</p>
                        <?php endif; ?>
                        <?php if (isset($nameuser['cidade'])): ?>
                            <p style="font-size: 12pt; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; color: #0f73ab;">
                                Cidade: <?php echo ucfirst($nameuser['cidade']); ?>
                                - <?php echo strtoupper($nameuser['uf']); ?></p>
                        <?php else: ?>
                            <p style="font-size: 12pt; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; color: #0f73ab;">
                                Cidade: Brasília - DF</p>
                        <?php endif; ?>
                    </div>
                    <?php
                    $fotos = $a->getMinhasFotos();
                    foreach ($fotos as $foto):
                        ?>
                        <div class="ember-view profile-photo">
                            <img src="assets/images/perfis/<?php echo $foto['url']; ?>" class="img-thumbnail"
                                 border="0">
                        </div>
                    <?php endforeach; ?>
                    <div class="col py-3 px-lg-5">

                        <p class="cont-5">

                        <ul class="user_actions">
                            <li><a class="button" href="editar-dados.php">Editar Perfil</a></li>
                            <li><a class="button" href="excluirconta.php">Excluir conta</a></li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



