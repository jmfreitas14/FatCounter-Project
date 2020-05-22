<?php
require_once 'header.php';
require_once 'menu-dentro.php';
?>

<link rel="stylesheet" media="screen"
      href="https://d34yn14tavczy0.cloudfront.net/assets/sass/application-e114c1bd8d8826f0b79675f360bd821ba291aca3b900a14a0cbfce77d4a8c5f2.css"/>
<link rel="stylesheet" media="all"
      href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" media="all"
      href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-awesome/css/font-awesome-ie7.min.css"/>
<link rel="stylesheet" media="all"
      href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-mfizz/font-mfizz.css"/>

<body class="layout-5" id="food-add" data-lang="pt" class=&quot;body-header&quot;>

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

            <h1 class="main-title">Adicionar alimento</h1>


            <div id="searchFoodByName">

                <form class="form" action="" method="post" id="form-pesquisa">

                    <h3 class="secondary-title">
                        Pesquise nosso banco de dados de alimentos por nome
                    </h3>

                    <p class="fields">

                        <input type="text" name="pesquisa" id="pesquisa" autocomplete="off" class="text"/>

                        <input type="submit" class="button" name="enviar" value="Pesquisar"/>

                    </p>

                </form>

                <ul class="resultado">

                </ul>

            </div>

            </tbody>

            </table>

            <div class="block-4 table-footer">

                <div class="col-1">
                    <input type="submit" name="add" class="button" value="Adicionar selecionado"/>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
