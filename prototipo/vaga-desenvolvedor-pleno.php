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
<?php
    include 'partials/base_header.php';
?>

    <div class="container mt-5 my-5 d-flex justify-content-center">
        <div class="row container-form ">
            <div class="card col-12 col-md-6">
                <img class="card-img-top" src="img/design-front.png" alt="Imagem da vaga de Desenvolvimento web 3">
                    <div class="card-body">
                        <h5 class="titulo-maior">Desenvolvedor Pleno</h5>
                        <p class="lead titulo-card">HTML, CSS, JavaScript, React.js, Controle de versão - Git e Github</p>
                            <p class="lead">Aqui, valorizamos resolução de problemas, trabalho em equipe e comunicação eficaz.</p>
                        <a href="area_vagas.html" role="button" class="btn btn-success mr-2">Voltar à área de vagas</a>
                    </div>
            </div>
        
        
            <div class="col-12 col-md-6 p-4">
                <h4 class="form-label titulo-maior">Vaga - Desenvolvedor Pleno</h4>
                <form action="" method="POST">
                    <input type="hidden" name="nome_vaga" value="desenvolvedor_pleno">
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
                <?php
                    include 'partials/processador_form_vaga.php';
                ?>
            </div>
    </div>
    </div>

    <?php
        include 'partials/base_footer.php';
    ?>
</div>
    </body>
    </html>