<?php

require_once 'header.php';
if (!isset($_SESSION['id_usuario'])) {
    header("location: index.php");
    exit;
}

?>

<div class="container">
    SEJA BEEEEEEEEM VINDOOOO!!!
</div>