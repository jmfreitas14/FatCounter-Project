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

<div id="wrap">

    <div id="content">

        <div id="main">

            <h1 class="main-title">Adicionar alimento</h1>

            <h3 class="secondary-title">
                Pesquise no nosso banco de dados de alimentos por nome
            </h3>
            <form method="post">

                <input class="form-control form-control-lg" type="text" placeholder="Pesquisar" autofocus>

                <div class="resultado">

                </div>

                <br>

                <input type="submit" class="button  add-new-entry" value="Adicionar Alimento"/>

            </form>