<?php
require_once 'header.php';
require_once 'menu-dentro.php';
?>

<html lang="pt">

<head>

    <link rel="stylesheet" media="screen"
          href="https://d34yn14tavczy0.cloudfront.net/assets/sass/application-e114c1bd8d8826f0b79675f360bd821ba291aca3b900a14a0cbfce77d4a8c5f2.css"/>

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
                    <td class="alt nutrient-column">
                        Sódio
                        <div class="subtitle">mg</div>
                    </td>
                    <td class="alt nutrient-column">
                        Açúcar
                        <div class="subtitle">g</div>
                    </td>
                </tr>


                <tr class="bottom">

                    <td class="first alt" style="z-index: 10">

                        <a href="#">Adicionar alimento</a>
                        <div class="quick_tools">
                            <div id="quick_tools_0" class="quick_tools_options hidden">
                            </div>
                        </div>
                <tr class="spacer">
                    <td class="first" colspan="6">&nbsp;</td>
                    <td class="empty">&nbsp;</td>
                </tr>

                <tr class="total">

                    <td class="first">Totais</td>


                    <td>0</td>

                    <td>
                        <span class="macro-value">0</span>
                        <span class="macro-percentage">
                -
              </span>
                    </td>

                    <td>
                        <span class="macro-value">0</span>
                        <span class="macro-percentage">
                -
              </span>
                    </td>

                    <td>
                        <span class="macro-value">0</span>
                        <span class="macro-percentage">
                -
              </span>
                    </td>

                    <td>0</td>

                    <td>0</td>

                    <td class="empty"></td>

                </tr>

                <tr class="total alt">

                    <td class="first">Sua meta diária</td>


                    <td>2.030</td>
                    <td>
                        <span class="macro-value">254</span>
                        <span class="macro-percentage">
                  50
                </span>
                    </td>
                    <td>
                        <span class="macro-value">68</span>
                        <span class="macro-percentage">
                  30
                </span>
                    </td>
                    <td>
                        <span class="macro-value">102</span>
                        <span class="macro-percentage">
                  20
                </span>
                    </td>
                    <td>2.300</td>
                    <td>76</td>
                    <td class="empty"></td>

                </tr>

                <tr class="total remaining">

                    <td class="first">Restantes</td>


                    <td class="positive">2.030</td>
                    <td class="positive">
                        <span class="macro-value">254</span>
                        <span class="macro-percentage ">
                  50
                </span>
                    </td>
                    <td class="positive">
                        <span class="macro-value">68</span>
                        <span class="macro-percentage ">
                  30
                </span>
                    </td>
                    <td class="positive">
                        <span class="macro-value">102</span>
                        <span class="macro-percentage ">
                  20
                </span>
                    </td>
                    <td class="positive">2.300</td>
                    <td class="positive">76</td>
                    <td class="empty"></td>

                </tr>


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
                    <td class="alt nutrient-column">
                        Sódio
                        <div class="subtitle">mg</div>
                    </td>
                    <td class="alt nutrient-column">
                        Açúcar
                        <div class="subtitle">g</div>
                    </td>
                    <td class="empty"></td>

                </tr>
                </tfoot>
            </table>
        </div>


        <div id="complete_day">
    <span class="day_incomplete_message">
  Quando você terminar de registrar todos os alimentos e exercícios para este dia, clique aqui: <br><br><a
                class="button complete-this-day-button" href="#">Concluir este registro</a>
</span>

        </div>
    </div>
</div>
</body>
</html>