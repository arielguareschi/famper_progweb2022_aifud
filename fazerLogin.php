<?php
    require_once('conexao.php');
    if (isset($_POST['acessar']) && !empty($_POST['acessar'])){
        if (!empty($_POST['login']) && !empty($_POST['senha'])){
            $sql  = "SELECT * ";
            $sql .= "FROM usuario ";
            $sql .= "WHERE login = '" . $_POST['login'] . "' ";
            $sql .= "  AND senha = '".$_POST['senha']."' ";
            $sql .= "  AND ativo = 1 ";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            if (count($result) > 0){
                foreach($result as $linha){
                    $_SESSION['id'] = $linha->id;
                    $_SESSION['nome'] = $linha->nome;
                    $_SESSION['email'] = $linha->email;
                }                
                header('location:index.php');
            } else {
                header('location:login.php?err=true');
            }
        } else {
            echo "Login ou senha nao informados";
        }
    } else {
        echo "Acesso indevido!";
    }
?>