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

if (isset($_POST['Nome_alimento']) && !empty($_POST['Nome_alimento'])) {
    $nome = addslashes($_POST['Nome_alimento']);
    $cal = addslashes($_POST['Caloria']);
    $prot = addslashes($_POST["Proteina"]);
    $carbo = addslashes($_POST['Carboidrato']);
    $gord = addslashes($_POST['Gordura']);

    $al->addAlimento($nome, $cal, $prot, $carbo, $gord);

    ?>
    <div class="flash">
        Alimento adicionado com sucesso!
    </div>

    <script type="text/javascript">window.location.href = "adicionaralimento.php";</script>
    <?php
    exit;
}
?>
<?php

if (isset($_GET['id_alimento']) && !empty($_GET['id_alimento'])) {
    $id = addslashes($_GET['id_alimento']);

    $dado = $al->getAlimento($id);
}
?>

<div id="wrap">


    <h1 class="main-title">Alimento selecionado:</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="block-1">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    Nome do alimento
                </label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control" name="Nome_alimento" for="inputPassword"
                           value="<?php echo $dado['Nome_alimento']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    Caloria
                </label>
                <div class="col-sm-10">
                    <input type="number" readonly class="form-control" name="Caloria" id="inputPassword"
                           value="<?php echo $dado['Caloria']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    Proteina
                </label>
                <div class="col-sm-10">
                    <input type="number" readonly class="form-control" name="Proteina" id="inputPassword"
                           value="<?php echo $dado['Proteina']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    Carboidrato
                </label>
                <div class="col-sm-10">
                    <input type="number" readonly class="form-control" name="Carboidrato" id="inputPassword"
                           value="<?php echo $dado['Carboidrato']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    Gordura
                </label>
                <div class="col-sm-10">
                    <input type="number" readonly class="form-control" name="Gordura" id="inputPassword"
                           value="<?php echo $dado['Gordura']; ?>">
                </div>
            </div>
            <p class="cont-1">

                    <input type="submit" class="button" value="Adicionar">


                <a href="adicionaralimento2.php">
                    <input type="button" role="button" value="Voltar"
                           class="button style-2"/>
                </a>
            </p>
        </div>
    </form>
</div>
