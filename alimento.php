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
                <td class="col-num">Data</td>
                <td class="col-num">Quantidade</td>
            </tr>

            </thead>
                <tr>
                    <td class="first">
                        Peso
                    </td>
                    <td class="col-num"></td>
                    <td class="col-num">kg</td>
                </tr>
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