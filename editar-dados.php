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
if (isset($_POST['idade']) && !empty($_POST['idade'])) {
    $idade = addslashes($_POST['idade']);
    $sexo = addslashes($_POST['sexo']);
    $cid = addslashes($_POST['cid']);
    $uf = addslashes($_POST['uf']);
    $nome = addslashes($_POST['atual']);


    if (isset($_FILES['fotos'])) {
        $fotos = $_FILES['fotos'];
    } else {
        $fotos = array();
    }

    $a->inserirFoto($idade, $sexo, $cid, $uf, $fotos, $nome);
    ?>
    <div class="flash">
        Perfil editado com sucesso!
    </div>
    <?php
    header('Refresh:0');
}
?>


<link rel="stylesheet" media="screen"
      href="https://d34yn14tavczy0.cloudfront.net/assets/sass/controllers/account-aba6b2a2376db7aab948e58e7e42c06ea3e028f2495b04733338f8927b1c797e.css"/>
<link rel="stylesheet" media="all"
      href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" media="all"
      href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-awesome/css/font-awesome-ie7.min.css"/>
<link rel="stylesheet" media="all" href="https://d34yn14tavczy0.cloudfront.net/stylesheets/font-mfizz/font-mfizz.css"/>

<body class="layout-1" data-lang="pt" class=&quot;body-header&quot;>

<style media="screen">
    /* imported from simba main app. do not modify manually */
    .globalTopNav-2GCw3 {
        background: #f0f0f0;
        border-bottom: 1px solid #d2d2d2;
        height: 30px;
        overflow: hidden
    }

    .globalTopNav-2GCw3 > ul {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin: 0;
        padding-left: 10px;
        list-style-type: none
    }

    .globalTopNav-2GCw3 > ul > li {
        border-right: 1px solid #d2d2d2
    }

    .globalTopNav-2GCw3 > ul > li > a {
        display: inline-block;
        padding: 6px 12px
    }
</style>

<br>

<div id="wrap">

    <div id="content">

        <div id="main">

            <h1 class="main-title">Meu Perfil</h1>

            <form method="post" enctype="multipart/form-data">
                <div class="block-1">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">
                            Nome de usuário:
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="atual" for="inputPassword"
                                   value="<?php echo $nameuser['nome_usuario']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">
                            Idade
                        </label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="idade" id="inputPassword"
                                   placeholder="Quantos anos?" value="<?php echo $nameuser['idade']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">
                            Sexo
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="sexo" id="inputPassword"
                                   placeholder="Qual sexo?" value="<?php echo $nameuser['sexo']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">
                            Cidade
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="cid" id="inputPassword"
                                   placeholder="Qual a cidade?" value="<?php echo $nameuser['cidade']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">
                            UF
                        </label>
                        <div class="col-sm-10">
                            <input type="text" maxlength="2" class="form-control" name="uf" id="inputPassword"
                                   placeholder="Qual o estado?" value="<?php echo $nameuser['uf']; ?>">
                            <p style="font-size: 7pt; font-family: Arial, Helvetica, sans-serif;">Duas Letras
                                somente.</p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <h1 class="main-title">Foto de Perfil</h1>

                    <div class="form-group">
                        <input type="file" name="fotos[]"><br>
                    </div>
                </div>

                <p class="cont-1">
                    <input type="submit" class="button" value="Salvar alterações"/>
                </p>
            </form>
        </div>
    </div>
</div>