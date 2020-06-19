<?php
require_once 'adicionaralimento.php';

if (!isset($_SESSION['id_usuario'])) {
    header("location: adicionaralimento.php");
    exit;
}

?>