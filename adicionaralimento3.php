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

        <div id="main">

            <h1 class="main-title">Adicionar alimento</h1>

            <h3 class="secondary-title">
                Pesquise no nosso banco de dados de alimentos por nome
            </h3>
            <form method="post">

                <input class="form-control form-control-lg" type="text" name="pesquisar" placeholder="Pesquisar"
                       autofocus>

                <br>
                <br>

                <h1 class="main-title">Resultados</h1>
                <ul class="resultado">
                    <?php
                    $pesquisar = 0;
                    $pesquisar = $_POST['pesquisar'];

                    try {
                    $sql = "SELECT * FROM alimento where Nome_alimento like '%$pesquisar%' limit 17";
                    $sql = $pdo->query($sql);
                    ?>
                    <?php
                    if ($sql->rowCount() > 0) {
                    foreach ($sql->fetchAll() as $alimento) {
                    ?>
                    <tr>
                        <td class="first alt">
                            <?php
                            echo '<tr>';
                            echo '<td><a href="produto.php?id_alimento=' . $alimento['id_alimento'] .'"> '. $alimento['Nome_alimento'] . '</a></td><br>';
                            echo '</tr>';
                            }
                            } else {
                                echo "Nenhum resultado encontrado...";
                            }
                            } catch (PDOException $e) {
                                echo "falhou: " . $e->getMessage();
                            }
                            ?>
                        </td>
                    </tr>
                </ul>
                <br>
            </form>
        </div>
    </div>
</div>