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

if (isset($_FILES['fotos'])) {
    $fotos = $_FILES['fotos'];
} else {
    $fotos = array();
}

$a->inserirFoto($fotos);

?>

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

                <form method="post" enctype="multipart/form-data">
                    <div class="content-wrap">
                        <div class="column-left">
                            <div class="layout-panel">
                                <div class="body">
                                    <div class="contents">
                                        <div class="home-screen-macros">
                                        </div>
                                        <div class="col summary-info">
                                            <div class="energy-breakdown">
                                                <h3 class="main-title-2">Adicionar uma nova foto</h3>
                                                <p>Para adicionar uma foto ao seu perfil, primeiro escolha uma foto do
                                                    seu computador e em seguida clique em "Enviar foto"
                                                </p>
                                                <div class="form-group">
                                                    <input type="file" name="fotos[]"><br><br>

                                                    <div class="panel panel-default">
                                                        <h3 class="main-title-2">Foto de Perfil</h3>
                                                        <div class="panel-body">
                                                            <?php foreach ($fotos as $foto): ?>
                                                                <div class="foto_item">
                                                                    <img src="assets/images/perfis/<?php echo $foto['url']; ?>"
                                                                         class="img-thumbnail"><br>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="submit" value="Salvar" class="btn btn-default">
                </form>