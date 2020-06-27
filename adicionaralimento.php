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
require 'classes/alimento.php';
$al = new alimento();

if (isset($_POST['total_kcl']) && !empty($_POST['total_kcl'])) {
    $tk = addslashes($_POST['total_kcl']);
    $tc = addslashes($_POST['total_carbo']);
    $tg = addslashes($_POST['total_gordura']);
    $tp = addslashes($_POST['total_proteina']);
    $mk = addslashes($_POST['meta_kcl']);
    $mc = addslashes($_POST['meta_carbo']);
    $mg = addslashes($_POST['meta_gordura']);
    $mp = addslashes($_POST['meta_proteina']);
    $kr = addslashes($_POST['kcl_restante']);
    $cr = addslashes($_POST['carbo_restante']);
    $gr = addslashes($_POST['gordura_restante']);
    $pr = addslashes($_POST['proteina_restante']);

    $al->concluirRegistro($tk, $tc, $tg, $tp, $mk, $mc, $mg, $mp, $kr, $cr, $gr, $pr);
    ?>
    <div class="flash">
        Registro salvo com sucesso!
    </div>
    <?php
}

$date = new DateTime();
?>

<html lang="pt">

<head>

    <link rel="stylesheet" media="screen"
          href="https://d34yn14tavczy0.cloudfront.net/assets/sass/application-e114c1bd8d8826f0b79675f360bd821ba291aca3b900a14a0cbfce77d4a8c5f2.css"/>
    <link rel="stylesheet" media="screen"
          href="https://d34yn14tavczy0.cloudfront.net/assets/sass/application-e114c1bd8d8826f0b79675f360bd821ba291aca3b900a14a0cbfce77d4a8c5f2.css"/>
    <link rel="stylesheet" media="all"
          href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" media="all"
          href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-awesome/css/font-awesome-ie7.min.css"/>
    <link rel="stylesheet" media="all"
          href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-mfizz/font-mfizz.css"/>

</head>

<body id="food-diary" data-lang="pt" class=&quot;body-header&quot;>

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

                <h1>Seu diário de alimentos:</h1>

            </div>

            <div class="food_container container">


                <table class="table0 " id="diary-table">

                    <colgroup>
                        <col class="col-1"/>
                        <col class="col-2"/>
                        <col class="col-2"/>
                        <col class="col-2"/>
                        <col class="col-2"/>
                        <col class="col-2"/>
                        <col class="col-2"/>
                        <col class="col-8"/>
                    </colgroup>

                    <tbody>


                    <tr class="meal_header">

                        <td class="first alt">Alimentos</td>
                        <td class="alt nutrient-column">
                            Calorias
                            <div class="subtitle">kcal</div>
                        </td>
                        <td class="alt nutrient-column">
                            Carboidratos
                            <div class="subtitle">g</div>
                        </td>
                        <td class="alt nutrient-column">
                            Gorduras
                            <div class="subtitle">g</div>
                        </td>
                        <td class="alt nutrient-column">
                            Proteínas
                            <div class="subtitle">g</div>
                        </td>
                    </tr>

                    <tr>
                        <?php

                        $infos = $al->getIngeridos();
                        foreach ($infos

                        as $info):
                        ?>

                        <td class="first alt">
                            <span>
                                <?php echo $info['nome_alimento']; ?>
                            </span>
                        </td>


                        <td><?php echo $info['caloria']; ?></td>

                        <td>
                            <span class="macro-value"><?php echo $info['carboidrato']; ?></span>
                        </td>

                        <td>
                            <span class="macro-value"><?php echo $info['gordura']; ?></span>
                        </td>

                        <td>
                            <span class="macro-value"><?php echo $info['proteina']; ?></span>
                        </td>
                        <td class="delete">
                            <a href="excluir-alimento.php?id=<?php echo $info['id']; ?>"><img
                                        src="assets/images/icon.png" width="13" height="13"></a>
                        </td>
                    </tr>

                    <?php endforeach; ?>

                    <tr class="bottom">
                        <?php

                        $somas = $al->somaIngeridos();
                        foreach ($somas

                        as $soma):
                        ?>

                        <td class="first alt" style="z-index: 10">

                            <a href="adicionaralimento2.php">Adicionar alimento</a>
                            <div class="quick_tools">
                                <div id="quick_tools_0" class="quick_tools_options hidden">
                                </div>
                            </div>
                        <td><?php echo $soma['calorias']; ?></td>

                        <td>
                            <span class="macro-value"><?php echo $soma['carboidratos']; ?></span>
                        </td>

                        <td>
                            <span class="macro-value"><?php echo $soma['gorduras']; ?></span>
                        </td>

                        <td>
                            <span class="macro-value"><?php echo $soma['proteinas']; ?></span>
                        </td>

                    </tr>


                    <tr class="total">

                        <td class="first">Totais</td>


                        <td name="total_kcl"><?php echo $soma['calorias']; ?></td>

                        <td name="total_carbo">
                            <span class="macro-value"><?php echo $soma['carboidratos']; ?></span>
                        </td>

                        <td name="total_gordura">
                            <span class="macro-value"><?php echo $soma['gorduras']; ?></span>
                        </td>

                        <td name="total_proteina">
                            <span class="macro-value"><?php echo $soma['proteinas']; ?></span>
                        </td>

                        <td class="empty"></td>
                        <?php endforeach; ?>

                    </tr>

                    <tr class="total alt">
                        <?php
                        require 'classes/Metas.php';
                        $me = new Metas();

                        $infos = $me->getMetas();
                        foreach ($infos

                        as $info):
                        ?>

                        <td class="first">Sua meta diária</td>

                        <td name="meta_kcl"><?php echo $info['caloria']; ?></td>

                        <td name="meta_carbo">
                            <span class="macro-value"><?php echo $info['carboidrato']; ?></span>
                        </td>
                        <td name="meta_gordura">
                            <span class="macro-value"><?php echo $info['gordura']; ?></span>
                        </td>
                        <td name="meta_proteina">
                            <span class="macro-value"><?php echo $info['proteina']; ?></span>
                        </td>

                        <td class="empty"></td>

                    </tr>

                    <?php endforeach; ?>

                    <tr class="total remaining">
                        <?php

                        $infosr = $al->restantes();
                        foreach ($infosr

                        as $infor):
                        ?>

                        <td class="first">Restantes</td>

                        <td name="kcl_restante"
                            class="<?php echo ($info['caloria'] > $soma['calorias']) ? 'positive' : 'negative'; ?>
                            "><?php echo $infor['caloriar']; ?></td>
                        <td name="carbo_restante"
                            class="<?php echo ($info['carboidrato'] > $soma['carboidratos']) ? 'positive' : 'negative'; ?>">
                            <span class="macro-value"><?php echo $infor['carboidratosr']; ?></span>
                        </td>
                        <td name="gordura_restante"
                            class="<?php echo ($info['gordura'] > $soma['gorduras']) ? 'positive' : 'negative'; ?>">
                            <span class="macro-value"><?php echo $infor['gordurasr']; ?></span>
                        </td>
                        <td name="proteina_restante"
                            class="<?php echo ($info['proteina'] > $soma['proteinas']) ? 'positive' : 'negative'; ?>">
                            <span class="macro-value"><?php echo $infor['proteinasr']; ?></span>
                        </td>
                        <td class="empty"></td>

                    </tr>

                    <?php endforeach; ?>

                    </tbody>

                    <tfoot>

                    <tr>

                        <td class="first"></td>
                        <td class="alt nutrient-column">
                            Calorias
                            <div class="subtitle">kcal</div>
                        </td>
                        <td class="alt nutrient-column">
                            Carboidratos
                            <div class="subtitle">g</div>
                        </td>
                        <td class="alt nutrient-column">
                            Gorduras
                            <div class="subtitle">g</div>
                        </td>
                        <td class="alt nutrient-column">
                            Proteínas
                            <div class="subtitle">g</div>
                        </td>
                        <td class="empty"></td>

                    </tr>
                    </tfoot>
                </table>

                <span class="day_incomplete_message" style="margin-left: 26%; font-weight: bold;">
                    Quando você terminar de registrar todos os alimentos para este dia, clique aqui:

                    <br><br>

                    <a class="button complete-this-day-button" href="concluirregistro.php" style="margin-left: 42%;">Limpar Registro</a>
                </span>

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {'packages': ['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {

                        var data = google.visualization.arrayToDataTable([
                            ['Task', 'Hours per Day'],
                            ['Calorias',<?php echo $soma['calorias']; ?>],
                            ['Carboidratos', <?php echo $soma['carboidratos']; ?>],
                            ['Proteinas', <?php echo $soma['proteinas']; ?>],
                            ['Gorduras', <?php echo $soma['gorduras']; ?>],
                        ]);

                        var options = {
                            title: 'Alimentos Ingeridos'
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                        chart.draw(data, options);
                    }
                </script>

                <body>
                <div id="piechart" style="width: 500px; height: 500px; height: 250px; width: 100%; text-align:
                     center; color: #999; line-height: 250px; font-size:
                     14px; font-family:
                'Lucida Grande', 'Lucida Sans Unicode', Verdana, Arial, Helvetica, sans-serif;">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas style="display: block; width: 940px; height: 250px;" width="940" height="250"
                            class="chartjs-render-monitor"></canvas>
                </div>
            </div>
</body>
</div>
</div>
</div>
</body>
</html>