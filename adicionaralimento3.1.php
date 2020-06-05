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

        <table class="table0 check-in" summary="check-in">

            <colgroup>
                <col class="col-1"/>
                <col class="col-2 col-num"/>
                <col class="col-3 col-num"/>
                <col class="col-4">
            </colgroup>

            <thead>

            <tr>

                <td>Nome</td>
                <td class="col-num">Calorias</td>
                <td class="col-num">Carboidratos</td>
                <td class="col-num">Proteinas</td>
                <td class="col-num">Gorduras</td>
            </tr>

            </thead>
                <tr>
                    <td class="first">
                        <?php echo $info['Nome_alimento']; ?>
                    </td>
                    <td class="col-num"><?php echo $info['Caloria']; ?></td>
                </tr>
        </table>