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
            <?php
            $usuario = null;
            if (isset($_GET['id'])) { // eh para editar 
                $stmt = $conexao->prepare("select * from usuario where id = :id");
                $usuarios = $stmt->execute(array('id' => $_GET['id']));
                while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
                    $usuario = $linha;
                }
            }
            ?>
            <div class="card-header">
                Cadastro de Usuários - <?php echo @$usuario->nome; ?>
                <a href="lista_usuario.php" class="btn btn-sm btn-success float-end">
                    Listar Usuário
                </a>
            </div>
            <div class="card-body">
                <form action="grava_usuario.php" method="post" role="form">
                    <input type="hidden" name="id" value="<?php echo @$usuario->id; ?>">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" value="<?php echo @$usuario->nome; ?>">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?php echo @$usuario->email; ?>">
                    <label for="login" class="form-label">Login:</label>
                    <input type="text" name="login" class="form-control" id="login" value="<?php echo @$usuario->login; ?>">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" name="senha" class="form-control" id="senha" value="<?php echo @$usuario->senha; ?>"><br />
                    <div class="form-control checkbox">
                        <label>
                            <input type="checkbox" name="ativo" id="ativo" value="1" <?php if (@$usuario->ativo == 1) {
                                                                                            echo "checked";
                                                                                        } ?>> Ativo
                        </label>
                    </div>

                    <input type="submit" class="form-control mt-2 btn btn-info" id="enviar" name="enviar" value="Salvar">

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>