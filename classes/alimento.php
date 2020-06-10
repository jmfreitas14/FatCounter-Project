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

        $sql = $pdo->prepare("insert into ingeridos(id_usuario, Nome_alimento, Caloria, Proteina, Carboidrato, Gordura) values (:id, :n, :kcl, :prot, :carbo, :gord)");
        $sql->bindValue(':id', $_SESSION['id_usuario']);
        $sql->bindValue(':n', $nome);
        $sql->bindValue(':kcl', $cal);
        $sql->bindValue(':prot', $prot);
        $sql->bindValue(':carbo', $carbo);
        $sql->bindValue(':gord', $gord);
        $sql->execute();
    }

    public function concluirRegistro($tk, $tc, $tg, $tp, $mk, $mc, $mg, $mp, $kr, $cr, $gr, $pr)
    {
        global $pdo;

        $sql = $pdo->prepare("INSERT INTO diario(data_registro, id_usuario, total_kcl, total_carbo, total_proteina, total_gordura, meta_kcl, meta_carbo, meta_proteina, meta_gordura, kcl_restante, carbo_restante, proteina_restante, gordura_restante) values (now(), :id, :tk, :tc, :tp, :tg, :mk, :mc, :mp, :mg, :kr, :cr, :pr, :gr)");
        $sql->bindValue(':id', $_SESSION['id_usuario']);
        $sql->bindValue(':tk', $tk);
        $sql->bindValue(':tc', $tc);
        $sql->bindValue(':tg', $tg);
        $sql->bindValue(':tp', $tp);
        $sql->bindValue(':mk', $mk);
        $sql->bindValue(':mc', $mc);
        $sql->bindValue(':mg', $mg);
        $sql->bindValue(':mp', $mp);
        $sql->bindValue(':kr', $kr);
        $sql->bindValue(':cr', $cr);
        $sql->bindValue(':gr', $gr);
        $sql->bindValue(':pr', $pr);
        $sql->execute();
    }

    public function getIngeridos()
    {
        $array = array();
        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM ingeridos where id_usuario = (select id_usuario from usuario where id_usuario = :id)");
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
