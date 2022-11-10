<?php
require_once('conexao.php');
require('funcoes.php');
validaLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ai Fud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php include('menu.php'); ?>
    <div class="content">
        <div class="card m-4">
            <div class="card-header">
                Lista de Usuários
                <a href="form_usuario.php" class="btn btn-sm btn-success float-end">
                    + Adicionar
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Login</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $stmt = $conexao->prepare("select * from usuario");
                            $stmt->execute();
                            while($linha = $stmt->fetch(PDO::FETCH_OBJ)){
                                ?>
                                <tr>
                                    <td><?php echo $linha->id; ?></td>
                                    <td><?php echo $linha->nome; ?></td>
                                    <td><?php echo $linha->email; ?></td>
                                    <td><?php echo $linha->login; ?></td>
                                    <td>
                                        <a href="form_usuario.php?id=<?php echo $linha->id; ?>" class="btn btn-sm btn-warning">Editar</a>
                                        <a href="deleta_usuario.php?id=<?php echo $linha->id; ?>" class="btn btn-sm btn-danger">Excluir</a>
                                    </td>
                                </tr>
                                <?php
                            } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>