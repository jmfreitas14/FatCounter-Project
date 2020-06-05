<?php

class alimento
{
    public function getAlimento() {

            global $pdo;

            $sql = $pdo->query("SELECT * FROM alimento");
            $sql->execute();

    }
}