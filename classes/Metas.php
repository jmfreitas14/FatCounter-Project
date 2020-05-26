<?php

class Metas
{
    public function adicionar($kcl, $prot, $carbo, $gord)
    {
        global $pdo;
        $sql = $pdo->prepare("INSERT INTO tmb (caloria, proteina, carboidrato, gordura, id_usuario) VALUES (:kcl, :p, :carbo, :g, :id)");
        $sql->bindValue(":kcl", $kcl);
        $sql->bindValue(":p", $prot);
        $sql->bindValue(":carbo", $carbo);
        $sql->bindValue(":g", $gord);
        $sql->bindValue(":id", $_SESSION['id_usuario']);
        $sql->execute();
    }

    public function atualizar($kcl, $prot, $carbo, $gord)
    {
        global $pdo;
        $sql = $pdo->prepare("update tmb set caloria = :kcl, proteina = :p, carboidrato = :carbo, gordura = :g where id_usuario = :id");
        $sql->bindValue(":kcl", $kcl);
        $sql->bindValue(":p", $prot);
        $sql->bindValue(":carbo", $carbo);
        $sql->bindValue(":g", $gord);
        $sql->bindValue(":id", $_SESSION['id_usuario']);
        $sql->execute();
    }

    public function getMetas()
    {
        global $pdo;

        $array = array();
        $sql = $pdo->prepare("SELECT * FROM tmb where id_usuario = (select id_usuario from usuario where id_usuario = :id)");
        $sql->bindValue(":id", $_SESSION['id_usuario']);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
}