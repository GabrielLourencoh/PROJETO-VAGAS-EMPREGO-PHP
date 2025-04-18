<?php 
    //pega a pagina atual em que estamos;
    $paginaAtual = basename($_SERVER['PHP_SELF']); 
?>

<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- nome ficticio por enquanto -->
            <title>+VagasBrasil</title>
            <!-- folha de estilo do documento -->
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="icon" href="img/logo+VagasBrasil-img.png">
            <!-- scripts do documento -->
             <script src="js/jquery-3.7.1.min.js" defer></script>
             <script src="js/bootstrap.js" defer></script>
            <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="css/especifico.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        </head>
        
<body>
    <div class="cor-fundo-cinza-claro">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo+VagasBrasil-img.png" width="30" height="30" class="d-inline-block align-top ml-5" alt="logo da +VagasBrasil">
                +VagasBrasil
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if ($paginaAtual == 'index.php') {echo 'active'; } ?>">
                    <a class="nav-link " href="index.php">Home</a>
                </li>
                <li class="nav-item <?php if ($paginaAtual == 'area_vagas.php') {echo 'active'; } ?>">
                    <a class="nav-link" href="area_vagas.php">Área de vagas</a>
                </li>
                <li class="nav-item <?php if ($paginaAtual == 'politica-privacidade.php') {echo 'active'; } ?>">
                    <a class="nav-link" href="politica-privacidade.php">Política de Privacidade</a>
                </li>
                <li class="nav-item <?php if ($paginaAtual == 'termos-uso.php') {echo 'active'; } ?>">
                    <a class="nav-link mr-4" href="termos-uso.php">Termos de Uso</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" role="button" class="btn btn-info mr-2">Login</a>
                </li>
                <li class="nav-item">
                    <a href="cadastro.php" role="button" class="btn btn-secondary mr-5">Cadastrar-se</a>
                </li>
                </ul>
            </div>
        </nav>
</body>
</html>