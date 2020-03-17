<?php

class Usuario
{
    public function cadastrar($nome, $email, $senha)
    {
        global $pdo;
        //verificar se já existe o email cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuario WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return false; //ja esta cadastrado
        } else {
            //caso nao, Cadastrar
            $sql = $pdo->prepare("INSERT INTO usuario (nome_usuario, email, senha) VALUES (:n, :e, :s)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            return true; //tudo ok
        }
    }


    public function logar($email, $senha)
    {
        global $pdo;
        //verificar se o email e senha estao cadastrados, se sim
        $sql = $pdo->prepare("SELECT id_usuario FROM usuario WHERE email = :e AND senha = :s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", md5($senha));
        $sql->execute();
        if ($sql->rowCount() > 0) {
            //entrar no sistema (sessao)
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true; //cadastrado com sucesso
        } else {
            return false;//nao foi possivel logar
        }
    }
}