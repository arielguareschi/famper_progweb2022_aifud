<?php
require_once('conexao.php');
if (isset($_GET)) {
    $sql = "";
    if (!empty($_GET['id'])) { // vai editar
        $sql = "delete from usuario ";
        $sql .= "where id = :id ";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        $stmt->execute();
        header("location:lista_usuario.php");
    }
    
} else {
    echo "acesso invalido!";
}
