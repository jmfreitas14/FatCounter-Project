<?php
require_once 'header.php';
?>
<?php
if (empty($_SESSION['id_usuario'])) {
    ?>
    <script type="text/javascript">window.location.href = "login.php";</script>
    <?php
    exit;
}
?>

<link rel="stylesheet" media="screen"
      href="https://d34yn14tavczy0.cloudfront.net/assets/sass/application-e114c1bd8d8826f0b79675f360bd821ba291aca3b900a14a0cbfce77d4a8c5f2.css"/>

<link rel="stylesheet" media="screen"
      href="https://d34yn14tavczy0.cloudfront.net/assets/sass/modals/bmi_alert-b23bfd74fa35d5f97d693b2d82e1407789c1e9c5ffb24d0a203a6b9adaf64c95.css"/>

<link rel="stylesheet" media="all"
      href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" media="all"
      href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-awesome/css/font-awesome-ie7.min.css"/>
<link rel="stylesheet" media="all" href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-mfizz/font-mfizz.css"/>


<body class="layout-0" data-lang="pt" class=&quot;body-header&quot;>

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


<div id="header">

    <div id="nav-bg">
        <ul id="nav" class="nav clearfix">

            <div class="col-sm-3">
                <li>
                    <a class="nav_button" href="areaRestrita.php">Minha Página</a>
                </li>
            </div>

            <div class="col-sm-3">
                <li>
                    <a class="nav_button" href="metas.php">Metas</a>
                </li>
            </div>
            <div class="col-sm-3">
                <li>
                    <a class="nav_button" href="medidas.php">Medidas</a>
                </li>
            </div>
            <div class="col-sm-3">
                <li>
                    <a class="nav_button" id="reports-nav-link" href="configuracoes.php">Configurações</a>
                </li>
            </div>
        </ul>
    </div>


