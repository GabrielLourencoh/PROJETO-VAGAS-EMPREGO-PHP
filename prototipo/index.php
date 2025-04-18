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
    
    <link rel="stylesheet" href="css/especifico.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="bg-light">
<?php
    include 'partials/base_header.php';
?>
<div class="cor-fundo-cinza pt-2 pb-5">
    <div class="container mt-5 text-center">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <img src="img/+VagasBrasil-banner.png" class="img-fluid w-100" alt="Banner principal da +VagasBrasil">
            </div>
            <div class="col-12 col-md-6 pb-5">
                <h1 class="display-3 titulo-maior">Vagas abertas para todo Brasil</h1>
                <p class="lead txt-maior">Seu próximo emprego pode estar a um clique de distância! Descubra vagas abertas em diversas áreas e conquiste a oportunidade que você merece.</p>
                <a href="cadastro.html" role="button" class="btn btn-info btn-lg">Cadastrar-se</a>
            </div>
        </div>
    </div>
</div>

<div class="cor-fundo-cinza-claro pt-2 pb-5">
    <div class="container mt-5 text-center">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 pb-5">
                <h1 class="display-4 titulo-maior">Quem somos? </h1>
                <p class="lead txt-maior">Nós somos a +VagasBrasil, uma plataforma dedicada a conectar talentos às melhores oportunidades do mercado. Somos especializados em fornecer um espaço eficiente para recrutadores postarem vagas e para candidatos enviarem seus currículos, garantindo uma experiência simples e eficaz para ambos. Nosso objetivo é facilitar a busca por empregos em todo o Brasil, tornando o processo de recrutamento mais acessível e ágil.</p>
            </div>  
            <div class="col-12 col-md-6">
                <img src="img/quem-somos.png" class="img-fluid w-75" alt="Banner Quem somos?">
            </div>           
        </div>
    </div>
</div>

<div class="cor-fundo-cinza pt-2 pb-5">
    <div class="container mt-5 text-center">
        <div class="row align-items-center"> 
            <div class="col-12 col-md-6">
                <img src="img/confianca.png" class="img-fluid w-75" alt="Banner confiança">
            </div>      
            <div class="col-12 col-md-6 pb-5">
                <h1 class="display-4 titulo-maior">A confiança que impulsiona carreiras e empresas</h1>
                <p class="lead txt-maior">A confiança é a base do nosso sucesso. Na +VagasBrasil, já ajudamos mais de 500.000 pessoas a conquistarem o emprego dos seus sonhos, conectando talentos a grandes oportunidades. Para recrutadores, nossa plataforma tem se mostrado a escolha ideal para encontrar os melhores profissionais, com um processo ágil e assertivo. Nos dedicamos a garantir que tanto candidatos quanto empresas tenham uma experiência segura, eficiente e transparente, construindo uma ponte sólida entre o mercado de trabalho e as necessidades do futuro.</p>
            </div>       
        </div>
    </div>
</div>

<div class="cor-fundo-cinza-claro pt-5 pb-5">
<div class="container text-center">
    <div class="container pb-4">
        <h1 class="titulo-maior">Conheça nossas melhores vagas disponiveis</h1>
    </div>  

    
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-12 col-md-4 mb-4  d-flex justify-content-center">
            <div class="card">
                <img class="card-img-top" src="img/pc.png" alt="Imagem da vaga 1">
                <div class="card-body">
                    <h5 class="titulo-maior">Estagiário de Desenvolvimento Web</h5>
                    <p class="lead titulo-card">HTML, CSS, JavaScript (básico ou intermediário)</p>
                        <p class="lead">Familiaridade com uma linguagem de back-end (ex: Node.js, Python, Java,.)</p>
                    <a href="vaga-desenvolvimento-web.html" role="button" class="btn btn-success mr-2">Cadastrar-se</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 mb-4 d-flex justify-content-center">
            <div class="card cor-fundo-card">
                <img class="card-img-top" src="img/programacao.png" alt="Imagem da vaga 2">
                <div class="card-body">
                    <h5 class="titulo-maior">Desenvolvedor Júnior Back-end</h5>
                    <p class="lead titulo-card">Python (Django ou Flask)</p>
                        <p class="lead">Conhecimento na linguagem Python voltado à Django ou Flask</p>
                        <p class="lead">Conhecimento em modelagem de banco de dados com sqlModel </p>
                    <a href="vaga-desenvolvedor-junior-back-end.html" role="button" class="btn btn-success mr-2">Cadastrar-se</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 mb-4 d-flex justify-content-center">
            <div class="card">
                <img class="card-img-top" src="img/design-front.png" alt="Imagem da vaga 3">
                <div class="card-body">
                    <h5 class="titulo-maior">Desenvolvedor Pleno</h5>
                    <p class="lead titulo-card">HTML, CSS, JavaScript, React.js, Controle de versão - Git e Github</p>
                        <p class="lead">Aqui, valorizamos resolução de problemas, trabalho em equipe e comunicação eficaz.</p>
                    <a href="vaga-desenvolvedor-pleno.html" role="button" class="btn btn-success mr-2">Cadastrar-se</a>
                </div>
            </div>
        </div>
        <div class="container pb-3 d-flex justify-content-end">
            <a href="area_vagas.html" role="button" class="btn btn-info mr-2 text-right">Clique para ter acesso a nossa Área de Vagas</a>
        </div>
</div>
</div>
</div>




<?php
    include 'partials/base_footer.php';
?>

</body>


</html>