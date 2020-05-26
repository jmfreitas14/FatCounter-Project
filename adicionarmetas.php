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
require 'classes/Metas.php';
$me = new Metas();

if (isset($_POST['kcl']) && !empty($_POST['kcl'])) {
    $kcl = addslashes($_POST['kcl']);
    $prot = addslashes($_POST['proteina']);
    $carbo = addslashes($_POST['carbo']);
    $gord = addslashes($_POST['gordura']);

    $me->adicionar($kcl, $prot, $carbo, $gord);
    header('Location: metas.php');

    ?>
    <?php

}
?>

<head>

    <link rel="stylesheet" media="screen"
          href="https://d34yn14tavczy0.cloudfront.net/assets/sass/application-e114c1bd8d8826f0b79675f360bd821ba291aca3b900a14a0cbfce77d4a8c5f2.css"/>

</head>

<body id="food-diary" data-lang="pt" class=&quot;body-header&quot;>
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
<style media="screen">
    {
        background: #f0f0f0
    ;
        border-bottom: 1px solid #d2d2d2
    ;
        height: 30px
    ;
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
            <div class="diary">
                <h1>Metas diárias de nutrição</h1>
            </div>
        </div>
    </div>
    <form method="post">
            <div class="row">
                <div class="col left">
        <span class="energy-measurement">
              Calorias
        </span>
                </div>
                <div class="col right">
                    <span>
                        <input type="text" name="kcl" id="measurement_display_value" class="text short"
                               data-unit-system="kg"/>
                    </span>
                    <span>
                        <label class="measurement_label unit_label" for="measurement_display_value">Kcl</label>
                    </span>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col left">
        <span class="energy-measurement">
              Carboidratos
        </span>
                </div>
                <div class="col right">
                    <span>
                        <input type="text" name="carbo" id="measurement_display_value" class="text short"
                               data-unit-system="kg"/>
                    </span>
                    <span>
                        <label class="measurement_label unit_label" for="measurement_display_value">g</label>
                    </span>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col left">
        <span class="energy-measurement">
              Proteínas
        </span>
                </div>
                <div class="col right">
                    <span>
                        <input type="text" name="proteina" id="measurement_display_value" class="text short"
                               data-unit-system="kg" />
                    </span>
                    <span>
                        <label class="measurement_label unit_label" for="measurement_display_value">g</label>
                    </span>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col left">
        <span class="energy-measurement">
              Gorduras
        </span>
                </div>
                <div class="col right">
                    <span>
                        <input type="text" name="gordura" id="measurement_display_value" class="text short"
                               data-unit-system="kg"/>
                    </span>
                    <span>
                        <label class="measurement_label unit_label" for="measurement_display_value">g</label>
                    </span>
                </div>
            </div>
        <br>
        <input type="submit" class="button" value="Adicionar"/>
    </form>
</div>
</body>
</body>