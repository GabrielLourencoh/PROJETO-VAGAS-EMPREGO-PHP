<?php
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['nome_vaga']) && isset($_POST['descricao'])) {
    include 'conexao.php';

    $nome = $_POST['nome'];
    $nome_vaga = $_POST['nome_vaga'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $descricao = $_POST['descricao'];
    $mensagem = "";

    $sql = "select * from usuarios where nome = '$nome' and email = '$email' and senha = '$senha'";
    $query = mysqli_query($conn, $sql);

    if ($query && mysqli_num_rows($query) > 0) {
        #TODO devo fazer verificação para caso usuario ja esteja cadastrado, não permitir
        $sql = "select * from vagas_inscricoes where nome_vaga = '$nome_vaga'and nome = '$nome' and email = '$email' and senha = '$senha'";
        $query_verificar_cadastro = mysqli_query($conn, $sql);

        if ($query_verificar_cadastro && mysqli_num_rows($query_verificar_cadastro) > 0) {
            $mensagem = "<p class='text-center text-danger py-2'>Usuário {$nome} - {$email} já está cadastrado nessa vaga!</p>";
        } else {
            $sql = "insert into vagas_inscricoes (nome_vaga, nome, email, senha, descricao) values ('$nome_vaga', '$nome', '$email', '$senha', '$descricao')";

            $query_inserir = mysqli_query($conn, $sql);

            if ($query_inserir) {
                $mensagem = "<p class='text-center text-success py-2'>Cadastro realizado com sucesso para o {$nome} - {$email} na vaga: {$nome_vaga}.</p>";
            } else {
                $mensagem = "<p class='text-center text-danger py-2'>Erro ao cadastrar à vaga. Tente novamente mais tarde.</p>";
            }
        }
    } else {
        $mensagem = "<p class='text-center text-danger py-2'>Usuário não cadastrado ou credenciais inválidas!</p>";
    }

    mysqli_close($conn);
}
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
    <link rel="stylesheet" href="css/cadastro-vaga.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="index.html">
            <img src="img/logo+VagasBrasil-img.png" width="30" height="30" class="d-inline-block align-top ml-5" alt="logo da +VagasBrasil">
            +VagasBrasil
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item  active">
                <a class="nav-link" href="area_vagas.html">Área de vagas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="politica-privacidade.html">Política de Privacidade</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-4" href="termos-uso.html">Termos de Uso</a>
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


<div class="cor-fundo-cinza-claro pt-5 pb-5">
    <div class="container text-center mb-5 mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-12 col-md-6 mb-6  d-flex justify-content-center">
                <div class="card tamanho-card pt-3">
                    <div class="card-body">
                        <h5 class="titulo-maior display-4">Resultado - Cadastro da Vaga</h5>
                        <p class="lead titulo-card"><?php echo $mensagem ?></p>
                        <a href="area_vagas.html" role="button" class="btn btn-success mr-2">Voltar à área de vagas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cor-fundo-cinza-claro pb-5 pt-5"> </div>
<div class="cor-fundo-cinza-claro pb-5"></div>
<footer class="bg-dark text-light">
    <div class="container-fluid py-3">
    <div class="row">
      <div class="col-4">
        <ul class="nav flex-column">
            <li class="nav-link"><a href="index.html" class="text-light">Retornar à home</a></li>
            <li class="nav-link"><a href="area_vagas.html" class="text-light">Retornar à área de vaga</a></li>
            <li class="nav-link"><a href="politica-privacidade.html" class="text-light">Política de Privacidade</a></li>
            <li class="nav-link"><a href="termos-uso.html" class="text-light">Termos de Uso</a></li>
        </ul>
      </div>
      <div class="col-8">
        <p>+VagasBrasil - Conectando talentos às melhores oportunidades. Nossa missão é facilitar o encontro entre empresas e profissionais, promovendo contratações seguras e eficientes em todo o Brasil.</p>

        <ul class="nav">
            <li class="nav-link" ><a href="https://github.com/GabrielLourencoh" target="_blank" class="fa-brands fa-square-github fa-3x text-light"></a></li>
            <li class="nav-link" ><a href="https://www.instagram.com/biel_santos_w09?igsh=ajY3dHdyZHhicnN4" target="_blank" class="fab fa-instagram fa-3x text-light"></a></li>
            <li class="nav-link" ><a href="mailto:gl930551@gmail.com?subject=Quero%20saber%20mais&body=Olá,%20gostaria%20de%20saber%20mais%20sobre%20o%20+VagasBrasil!"  class="fa-solid fa-envelope fa-3x text-light"></a></li>
            <li class="nav-link" ><a href="https://wa.me/5514996231876?text=Quero%20saber%20mais%20sobre%20o%20%2BVagasBrasil!" target="_blank" class="fab fa-whatsapp fa-3x text-light"></a></li>
        </ul>
      </div>
    </div>
    </div>
    <div class="text-center cor-fundo-rodape py-4">
      <p>© 2025 +VagasBrasil. Todos os direitos reservados. | <a href="politica-privacidade.html">Política de Privacidade</a> | <a href="termos-uso.html">Termos de Uso</a></p>
    </div>
</footer>

</body>
</html>