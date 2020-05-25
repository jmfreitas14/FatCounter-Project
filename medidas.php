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
require 'classes/Medida.php';
$m = new Medida();

if (isset($_POST['data']) && !empty($_POST['data'])) {
    $data = addslashes($_POST['data']);
    $kg = addslashes($_POST['kg']);

    $m->adicionar($data, $kg);
    ?>
    <div class="flash">
        Medida adicionada com sucesso!
    </div>
    <?php
}
?>

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

<div id="wrap">

    <div id="content">

        <table class="table0 check-in" summary="check-in">

            <colgroup>
                <col class="col-1"/>
                <col class="col-2 col-num"/>
                <col class="col-3 col-num"/>
                <col class="col-4">
            </colgroup>

            <thead>

            <tr>

                <td>Medida</td>
                <td class="col-num">Data</td>
                <td class="col-num">Quantidade</td>
            </tr>

            </thead>

            <?php
            $infos = $m->getPeso();
            foreach ($infos as $info):
                ?>
                <tr>
                    <td class="first">
                        Peso
                    </td>
                    <td class="col-num"><?php $date = new DateTime($info['idata']);
                        echo $date->format('d/m/Y'); ?></td>
                    <td class="col-num"><?php echo $info['result_peso']; ?> kg</td>
                </tr>

            <?php endforeach; ?>

        </table>

        <h1 class="main-title">Adicionar novo registro</h1>

        <form method="post">

            <p class="cont-2">

                <label>Data:</label>

                <input autofocus type="date" name="data" id="data">

                <label>Quantidade:</label>

                <span class="unit-form-field standard">


  <span class="">
    <input type="text" name="kg" id="measurement_display_value" class="text short"
           data-unit-system="kg"/>
</span>
  <label class="measurement_label unit_label" for="measurement_display_value">kg</label>

</span>
                <input type="submit" class="button  add-new-entry" value="Adicionar novo registro"/>

            </p>

        </form>

    </div>