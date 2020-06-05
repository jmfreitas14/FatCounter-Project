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
        <div id="ember">
            <style>
                .pre-ember-loader {
                    position: relative;
                    min-height: 100px;
                }
            </style>

            <div class="pre-ember-loader">
                <div class="content">
                    <link rel="stylesheet" media="screen"
                          href="https://d34yn14tavczy0.cloudfront.net/assets/sass/ember_preloads/pages/home/index-d92b37b026b3858bd9a620754b6cc2a2dc5eb31ec0c09742229e41e176ec65ac.css"/>

                </div>

                <div class="ad header">
                    <div class="ad-slot-banner"></div>
                </div>

                <div class="content-wrap">
                    <div class="column-left">
                        <div class="layout-panel">
                            <header>
                                <div class="contents">
                                    <div class="left">
                                        <h2>
                                            Seu resumo diário
                                        </h2>
                                    </div>
                                </div>
                            </header>
                            <div class="body">
                                <div class="contents">
                                    <div class="home-screen-macros">
                                        <?php
                                        $fotos = $a->getMinhasFotos();
                                        foreach ($fotos as $foto):
                                            ?>
                                            <div class="col user-info">
                                                <div class="ember-view profile-photo">
                                                    <div class="no-image">
                                                            <img src="assets/images/perfis/<?php echo $foto['url']; ?>"
                                                                 class="img-thumbnail"
                                                                 border="0">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <div class="col summary-info">
                                            <div class="energy-breakdown">
                                                <span class="remaining">Meta</span>
                                                <div class="energy-remaining-component">
                                                    <div class="energy-remaining">
                                                        <div class="energy-remaining-details">
                                                            <div class="energy-remaining-number ">
                                                                <div class="spinner">
                                                                <?php
                                                                    require 'classes/Metas.php';
                                                                    $me = new Metas();

                                                                    $infos = $me->getMetas();
                                                                    foreach ($infos

                                                                             as $info):
                                                                        ?>

                                                                        <p style="font-size: 40px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #85c400;"><?php echo $info['caloria']; ?></p>

                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                            <div class="add-buttons">
                                                                <a class="gray button desc"
                                                                   href="adicionaralimento.php">
                                                                    Adicionar alimento
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bottom-spacer">
                                                    <hr>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>