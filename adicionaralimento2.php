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
            <form method="post" action="adicionaralimento3.php">

                <input class="form-control form-control-lg" type="text" name="pesquisar" placeholder="Pesquisar"
                       autofocus>

                <br>
                <br>

                <h1 class="main-title">Resultados</h1>
                <ul class="resultado">
                    <tr>
                        <td class="first alt">
                            <a class="js-show-edit-food" data-food-entry-id="8166468160" data-locale="pt"
                               href="alimento.php" style="color: #000;">
                            </a>
                        </td>
                    </tr>
                </ul>
                <br>
            </form>
        </div>
    </div>
</div>


