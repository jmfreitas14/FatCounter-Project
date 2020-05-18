<?php
require_once 'menu-logado.php';

if (!isset($_SESSION['id_usuario'])) {
    header("location: index.php");
    exit;
}

?>