<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Ifud</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="lista_cliente.php">Cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="lista_usuario.php">Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="lista_produto.php">Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="lista_fornecedor.php">Fornecedor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="lista_transportador.php">Transportador</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="lista_venda.php">Venda</a>
                </li>
            </ul>
            <li class="d-flex nav-item dropdown dropstart">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['nome']; ?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="logout.php">Sair</a></li>
                </ul>
            </li>

        </div>
    </div>
</nav>