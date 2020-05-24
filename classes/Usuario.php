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
            $sql->bindValue(":e", $email);
            $sql->bindValue(":n", $nome);
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
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true; //cadastrado com sucesso
        } else {
            return false;//nao foi possivel logar
        }
    }

    public function getNamelogin()
    {
        global $pdo;


        $sql = $pdo->prepare("SELECT nome_usuario, email, senha FROM usuario WHERE id_usuario = :id");
        $sql->bindValue(":id", $_SESSION['id_usuario']);
        $sql->execute();
        //puxar nome pelo id logado
        if ($sql->rowCount() > 0) {
            $nameuser = $sql->fetch();
        }
        return $nameuser;
    }

    public function editUsuario($nome, $id_usuario)
    {

        global $pdo;

        $sql = $pdo->prepare("update usuario set nome_usuario = :nome where id_usuario = :id");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":id", $id_usuario);
        $sql->execute();
    }

    public function editSenha($senha, $id_usuario)
    {

        global $pdo;

        $sql = $pdo->prepare("update usuario set senha= :senha where id_usuario = :id");
        $sql->bindValue(":senha", md5($senha));
        $sql->bindValue(":id", $id_usuario);
        $sql->execute();
    }

    public function editEmail($email, $id_usuario)
    {

        global $pdo;

        $sql = $pdo->prepare("update usuario set email = :email where id_usuario = :id");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":id", $id_usuario);
        $sql->execute();
    }

    public function excluirConta($excluir, $id_usuario)
    {
        global $pdo;

        $sql = $pdo->prepare("delete from usuario where id_usuario = :id");
        $sql->bindValue(":id", $id_usuario);
        $sql->execute();
    }
}