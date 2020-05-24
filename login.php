<?php
require 'header.php';
require 'classes/Usuario.php';
$u = new Usuario();
?>

<div class="container">
    <div class="row mt-5 justify-content-center">
        <form method="post">
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" class="form-control" autofocus>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Entrar" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

<div class="container">
    <a href="#" class="nav-link">Esqueceu-se da senha?</a>
    <div class="navbar justify-content-start">
        <a>Ainda não possui conta?</a>
        <a href="register.php" class="nav-link">Cadastre-se</a>
    </div>
</div>

<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if ($u->logar($email, $senha)) {
        ?>
            <script type="text/javascript">window.location.href = "areaRestrita.php";</script>
        <?php
    } else {
        ?>
        <div class="container alert alert-danger">
            Usuario e/ou senha incorretos!<a href="register.php" class="alert alert-link">Cadastre-se</a>
        </div>
        <?php
    }
}
?>
<?php
require 'footer.php';
?>
