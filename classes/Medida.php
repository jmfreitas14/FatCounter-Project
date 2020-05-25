<?php

class Medida
{
    public function adicionar($data, $kg)
    {
        global $pdo;
        $sql = $pdo->prepare("INSERT INTO medidas (result_peso, idata, id_usuario) VALUES (:rp, :d, :id)");
        $sql->bindValue(":rp", $kg);
        $sql->bindValue(":d", $data);
        $sql->bindValue(":id", $_SESSION['id_usuario']);
        $sql->execute();
    }

    public function getPeso()
    {
        global $pdo;

        $array = array();
        $sql = $pdo->prepare("SELECT * FROM medidas where id_usuario = (select id_usuario from usuario where id_usuario = :id) order by idata desc");
        $sql->bindValue(":id", $_SESSION['id_usuario']);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
}