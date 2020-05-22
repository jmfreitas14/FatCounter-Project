<?php
include_once 'config.php';

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM alimento WHERE Nome_alimento LIKE '%$usuarios%' LIMIT 20";
$resultado_user = $pdo->query($result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
    while($row_user = mysqli_fetch_assoc($resultado_user)){
        echo "<li>".$row_user['Nome_alimento']."</li>";
    }
}else{
    echo "Nenhum usuário encontrado ...";
}