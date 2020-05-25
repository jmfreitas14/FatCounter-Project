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
        $array = array();


        $sql = $pdo->prepare("SELECT nome_usuario, email, senha FROM usuario WHERE id_usuario = :id");
        $sql->bindValue(":id", $_SESSION['id_usuario']);
        $sql->execute();
        //puxar nome pelo id logado
        if ($sql->rowCount() > 0) {
            $nameuser = $sql->fetch();
        }
        return $nameuser;
    }

    public function getFoto($id)
    {
        $array = array();
        global $pdo;

            $sql = $pdo->prepare("select id, url from usuario_imagens where id_usuario = :id_usuario");
            $sql->bindValue(":id_usuario", $id);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $array['fotos'] = $sql->fetch();
            }
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

    public function inserirFoto($fotos)
    {
        global $pdo;

        if (count($fotos) > 0) {
            for ($q = 0; $q < count($fotos['tmp_name']); $q++) {
                $tipo = $fotos ['type'][$q];
                if (in_array($tipo, array('image/jpeg', 'image/png'))) {
                    $tmpname = md5(time() . rand(0, 9999)) . '.jpg';
                    move_uploaded_file($fotos['tmp_name'][$q], 'assets/images/perfis/' . $tmpname);
                    list($width_orig, $height_orig) = getimagesize('assets/images/perfis/' . $tmpname);
                    $ratio = $width_orig / $height_orig;

                    $width = 500;
                    $height = 500;

                    if ($width / $height > $ratio) {
                        $width = $height * $ratio;
                    } else {
                        $height = $width * $ratio;
                    }

                    $img = imagecreatetruecolor($width, $height);
                    if ($tipo == 'image/jpeg') {
                        $origi = imagecreatefromjpeg('assets/images/perfis/' . $tmpname);
                    } elseif ($tipo == 'image/png') {
                        $origi = imagecreatefrompng('assets/images/perfis/' . $tmpname);
                    }
                    imagecopyresampled($img, $origi, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
                    imagejpeg($img, 'assets/images/perfis/' . $tmpname, 80);

                    $sql = $pdo->prepare("insert into usuario_imagens set id_usuario = :id_usuario, url = :url");
                    $sql->bindValue(":id_usuario", $_SESSION['id_usuario']);
                    $sql->bindValue(":url", $tmpname);
                    $sql->execute();
                }
            }
        }
    }
}