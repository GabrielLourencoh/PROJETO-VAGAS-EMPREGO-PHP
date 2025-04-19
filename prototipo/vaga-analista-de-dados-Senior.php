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
<body>
<div class="cor-fundo-cinza-claro">
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
            <li class="nav-item">
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

    <div class="container mt-5 my-5 d-flex justify-content-center">
        <div class="row container-form ">
            <div class="card col-12 col-md-6">
                <img class="card-img-top" src="img/analista-dados-1.png" alt="Imagem da vaga de Análise de Dados 1">
                <div class="card-body">
                    <h5 class="titulo-maior">Analista de Dados Sênior</h5>
                    <p class="lead titulo-card">Conhecimento em modelagem de dados, análise estatística e ferramentas de visualização</p>
                        <p class="lead">Responsável pela análise profunda dos dados, extraindo insights.</p>
                        <a href="area_vagas.html" role="button" class="btn btn-success mr-2">Voltar à área de vagas</a>
                    </div>
            </div>
        
        
            <div class="col-12 col-md-6 p-4">
                <h4 class="form-label titulo-maior">Vaga - Analista de Dados Sênior</h4>
                <form action="processador_form_vaga.php" method="POST">
                    <input type="hidden" name="nome_vaga" value="analista_dados_senior">
                    <div class="mb-3">
                        <label>Nome</label>
                        <input type="text" class="form-control" placeholder="Seu nome" name="nome">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Exemplo@gmail.com" name="email">
                    </div>
                    <div class="mb-3">
                        <label>Senha</label>
                        <input type="password" class="form-control" placeholder="Digite sua senha" name="senha">
                    </div>
                    <div class="mb-3">
                        <label>Nos conte um pouco sobre você</label>
                        <textarea class="form-control" rows="4" placeholder="Escreva um pouco sobre sua vida e carreira profissional." name="descricao"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-4">Enviar</button>
                </form>
            </div>
    </div>
    </div>

    <footer class="bg-dark text-light mt-5">
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
</div>
    </body>
    </html>