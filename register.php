<?php
require 'header.php';
require_once 'classes/Usuario.php';
$u = new Usuario();
?>

<div class="container">
    <div class="row mt-5 justify-content-center">
        <form method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" autofocus>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
<div class="container">
    <!--<a href="#" class="nav-link">Esqueceu-se da senha?</a>--!>
    <div class="navbar justify-content-start">
        <a>Já possui conta?</a>
        <a href="login.php" class="nav-link">Entre</a>
    </div>
</div>
<?php

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if (!empty($nome) && !empty($email) && !empty($senha)) {
        if ($u->cadastrar($nome, $email, $senha)) {
            ?>
            <div class="container alert alert-success">
                <strong>Parabéns!</strong> Cadastrado com sucesso.<a href="login.php" class="alert alert-link">Faça
                    o login agora</a>
            </div>
            <?php
        } else {
            ?>
            <div class="container alert alert-warning">
                Usuario ja cadastrado!<a href="login.php" class="alert alert-link">Faca o login agora</a>
            </div>
            <?php
        }
    } else {
        ?>
        <div class="container alert alert-warning">
            Preencha todos os campos!
        </div>
        <?php
    }
}

?>
<?php
require 'footer.php';
?>
