<?php

class alimento
{
    public function getAlimento($id)
    {
        $array = array();
        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM alimento where id_alimento = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        return $array;
    }

    public function addAlimento($nome, $cal, $prot, $carbo, $gord)
    {
        global $pdo;

        $sql = $pdo->prepare("insert into ingeridos(id_usuario, Nome_alimento, Caloria, Proteina, Carboidrato, Gordura, data) values (:id, :n, :kcl, :prot, :carbo, :gord, NOW())");
        $sql->bindValue(':id', $_SESSION['id_usuario']);
        $sql->bindValue(':n', $nome);
        $sql->bindValue(':kcl', $cal);
        $sql->bindValue(':prot', $prot);
        $sql->bindValue(':carbo', $carbo);
        $sql->bindValue(':gord', $gord);

        $sql->execute();
    }

    public function concluirRegistro()
    {
        global $pdo;

        $sql = $pdo->prepare("delete from ingeridos where id_usuario = :id");
        $sql->bindValue(":id", $_SESSION['id_usuario']);
        $sql->execute();
    }

    public function getIngeridos()
    {
        $array = array();
        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM ingeridos where id_usuario = :id ");
        $sql->bindValue(":id", $_SESSION['id_usuario']);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function somaIngeridos()
    {
        $array = array();
        global $pdo;

        $sql = $pdo->prepare("SELECT sum(caloria) as calorias, sum(proteina) as proteinas, sum(carboidrato) as carboidratos, sum(gordura) as gorduras FROM ingeridos where id_usuario = (select id_usuario from usuario where id_usuario = :id)");
        $sql->bindValue(":id", $_SESSION['id_usuario']);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function restantes()
    {
        $array = array();
        global $pdo;

        $sql = $pdo->prepare("SELECT (SELECT caloria FROM tmb where id_usuario = (select id_usuario from usuario where id_usuario = :id)) - sum(caloria) as caloriar, (SELECT proteina FROM tmb where id_usuario = (select id_usuario from usuario where id_usuario = :id)) - sum(proteina)  as proteinasr, (SELECT carboidrato FROM tmb where id_usuario = (select id_usuario from usuario where id_usuario = :id)) - sum(carboidrato) as carboidratosr,  (SELECT gordura FROM tmb where id_usuario = (select id_usuario from usuario where id_usuario = :id)) - sum(gordura) as gordurasr FROM ingeridos where id_usuario = (select id_usuario from usuario where id_usuario = :id)");
        $sql->bindValue(":id", $_SESSION['id_usuario']);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function excluirAlimento($id) {
        global $pdo;

        $sql = $pdo->prepare("delete from ingeridos where id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
}
