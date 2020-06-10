<?php
require 'config.php';

if (empty($_SESSION['id_usuario'])) {
    ?>
    <script type="text/javascript">window.location.href = "login.php";</script>
    <?php
    exit;
}
require 'classes/alimento.php';
$al = new alimento();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $al->excluirAlimento($_GET['id']);
}
header('Location: adicionaralimento.php');
