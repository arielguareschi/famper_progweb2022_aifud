<?php
      require_once('conexao.php');
      if (isset($_POST)){
        $sql = "";
        if (!empty($_POST['id'])){ // vai editar
            $sql = "update usuario ";
            $sql .= "set nome = :nome, ";
            $sql .= "    email = :email, ";
            $sql .= "    login = :login, ";
            $sql .= "    senha = :senha, ";
            $sql .= "    ativo = :ativo ";
            $sql .= "where id = :id ";
        } else { // vai inserir
            $sql = "insert into usuario (nome, email, login, senha, ativo)";
            $sql .= "values (:nome, :email, :login, :senha, :ativo)";
        }
        $stmt = $conexao->prepare($sql);
        if (!empty($_POST['id'])){
            $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
        }
        $stmt->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
        $stmt->bindParam(':login', $_POST['login'], PDO::PARAM_STR);
        $stmt->bindParam(':senha', $_POST['senha'], PDO::PARAM_STR);
        $stmt->bindParam(':ativo', $_POST['ativo'], PDO::PARAM_INT);
        $stmt->execute();
        if (!empty($_POST['id'])){
            $id = $_POST['id'];
        } else {
            $id = $conexao->lastInsertId();
        }
        header("location:form_usuario.php?id=". $id);
      } else {
        echo "acesso invalido!";
      }
