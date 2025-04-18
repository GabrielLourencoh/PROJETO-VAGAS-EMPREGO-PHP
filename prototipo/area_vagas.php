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

<body class="bg-light">
<?php
    include 'base_header.php';
?>
<div class="cor-fundo-cinza pt-2 pb-5">
    <!-- tlvz futuramente transformar em um carrossel -->
    <div class="container mt-5 text-center">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <!-- imagem de teste -->
                <img src="img/banner-vagas.png" class="img-fluid w-100" alt="Banner principal da área de vagas">
            </div>
            <div class="col-12 col-md-6 pb-5">
                <!--  texto -->
                <h1 class="display-4 titulo-maior">Seja bem-vindo à nossa Área de Vagas!</h1>
                <p class="lead txt-maior">Aqui você encontrará diversas oportunidades publicadas por empresas em busca de novos talentos. Navegue pelas vagas disponíveis, explore as possibilidades e encontre a chance ideal para dar o próximo passo na sua carreira.</p>
                <a href="cadastro.html" role="button" class="btn btn-info btn-lg">Cadastrar-se</a>
            </div>
        </div>
    </div>
</div>

<div class="cor-fundo-cinza-claro pt-5 pb-5">
    <div class="container text-center">
        <div class="container pb-4">
            <h1 class="text-left titulo-maior">Desenvolvimento Web</h1>
        </div>
    
        
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-12 col-md-4 mb-4  d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="img/pc.png" alt="Imagem da vaga de Desenvolvimento web 1">
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
                    <img class="card-img-top" src="img/programacao.png" alt="Imagem da vaga de Desenvolvimento web 2">
                    <div class="card-body">
                        <h5 class="titulo-maior">Desenvolvedor Júnior Back-end</h5>
                        <p class="lead titulo-card">Python (Django ou Flask)</p>
                            <p class="lead">Conhecimento na linguagem Python voltado à Django ou Flask</p>
                            <p class="lead">Conhecimento em modelagem de banco de dados com sqlModel.</p>
                        <a href="vaga-desenvolvedor-junior-back-end.html" role="button" class="btn btn-success mr-2">Cadastrar-se</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 mb-4 d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="img/design-front.png" alt="Imagem da vaga de Desenvolvimento web 3">
                    <div class="card-body">
                        <h5 class="titulo-maior">Desenvolvedor Pleno</h5>
                        <p class="lead titulo-card">HTML, CSS, JavaScript, React.js, Controle de versão - Git e Github</p>
                            <p class="lead">Aqui, valorizamos resolução de problemas, trabalho em equipe e comunicação eficaz.</p>
                        <a href="vaga-desenvolvedor-pleno.html" role="button" class="btn btn-success mr-2">Cadastrar-se</a>
                    </div>
                </div>
            </div>

    </div>
</div>
</div>

<div class="cor-fundo-cinza-claro pt-5 pb-5">
        <div class="container text-center">
            <div class="container pb-4">
                <h1 class="text-left titulo-maior">Ciência de Dados</h1>
            </div>
        
            
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-md-4 mb-4  d-flex justify-content-center">
                    <div class="card">
                        <img class="card-img-top" src="img/ciencia-dados-1.png" alt="Imagem da vaga de Ciência de Dados 1">
                        <div class="card-body">
                            <h5 class="titulo-maior">Estagiário de Ciência de Dados</h5>
                            <p class="lead titulo-card">Conhecimento em Python, pandas, SQL e análise exploratória de dados</p>
                            <p class="lead">Noções de aprendizado de máquina e visualização de dados.</p>
                            <a href="vaga-estagiario-ciencia-de-dados.html" role="button" class="btn btn-success mr-2">Cadastrar-se</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 mb-4 d-flex justify-content-center">
                    <div class="card cor-fundo-card">
                        <img class="card-img-top" src="img/ciencia-dados-2.png" alt="Imagem da vaga de Ciência de Dados 2">
                        <div class="card-body">
                            <h5 class="titulo-maior">Cientista de Dados Sênior</h5>
                            <p class="lead titulo-card">Experiência avançada em Machine Learning, Deep Learning, Python, R e Big Data. Capacidade de construir pipelines de dados complexos.</p>
                            <a href="vaga-cientista-de-dados-senior.html" role="button" class="btn btn-success mr-2">Cadastrar-se</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 mb-4 d-flex justify-content-center">
                    <div class="card">
                        <img class="card-img-top" src="img/ciencia-dados-3.png" alt="Imagem da vaga de Ciência de Dados 3">
                        <div class="card-body">
                            <h5 class="titulo-maior">Cientista de Dados Pleno</h5>
                            <p class="lead titulo-card">Expertise em Machine Learning, Python, R, SQL, e Big Data</p>
                            <p class="lead">Conhecimento em modelos de Deep Learning e ferramentas como TensorFlow e Keras.</p>
                            <a href="vaga-cientista-de-dados-pleno.html" role="button" class="btn btn-success mr-2">Cadastrar-se</a>
                        </div>
                    </div>
                </div>
    
        </div>
    </div>
</div>

<div class="cor-fundo-cinza pt-5 pb-5">
    <div class="container text-center">
        <div class="container pb-4">
            <h1 class="text-left titulo-maior">Análise de Dados</h1>
        </div>
    
        
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-12 col-md-4 mb-4  d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="img/analista-dados-1.png" alt="Imagem da vaga de Análise de Dados 1">
                    <div class="card-body">
                        <h5 class="titulo-maior">Analista de Dados Sênior</h5>
                        <p class="lead titulo-card">Conhecimento em modelagem de dados, análise estatística e ferramentas de visualização</p>
                            <p class="lead">Responsável pela análise profunda dos dados, extraindo insights.</p>
                        <a href="vaga-analista-de-dados-Senior.html" role="button" class="btn btn-success mr-2">Cadastrar-se</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 mb-4 d-flex justify-content-center">
                <div class="card cor-fundo-card">
                    <img class="card-img-top" src="img/analista-ddos-2.png" alt="Imagem da vaga de Análise de Dados 2">
                    <div class="card-body">
                        <h5 class="titulo-maior">Estagiário de Análise de Dados</h5>
                        <p class="lead titulo-card">Conhecimento em Excel, SQL e Python básico</p>
                            <p class="lead">Auxiliar na coleta, organização e análise de dados para gerar insights.</p>
                        <a href="vaga-estagiário-de-análise-de-dados.html" role="button" class="btn btn-success mr-2">Cadastrar-se</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 mb-4 d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="img/analista-dados-3.png" alt="Imagem da vaga de Análise de Dados 3">
                    <div class="card-body">
                        <h5 class="titulo-maior">Analista de Dados Júnior</h5>
                        <p class="lead titulo-card">Experiência com Power BI, SQL, Excel avançado e Python</p>
                            <p class="lead">Responsável por análise de dados e geração de relatórios para suporte à tomada de decisão.</p>
                        <a href="vaga-Analista-de-Dados-Júnior.html" role="button" class="btn btn-success mr-2">Cadastrar-se</a>
                    </div>
                </div>
            </div>

    </div>
</div>
</div>

<div class="cor-fundo-cinza pt-5 pb-5">
    <div class="container text-center">
        <div class="container pb-4">
            <h1 class="text-left titulo-maior">Engenharia de Software</h1>
        </div>
    
        
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-12 col-md-4 mb-4  d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="img/eng-software-1.png" alt="Imagem da vaga de Engenharia de Software 1">
                    <div class="card-body">
                        <h5 class="titulo-maior">Estagiário de Engenharia de Software</h5>
                        <p class="lead titulo-card">C#, Java, ou Python básico</p>
                            <p class="lead">Conhecimento básico em programação orientada a objetos e desenvolvimento de software.</p>
                        <a href="vaga-Estagiário-de-Engenharia-de-Software.html" role="button" class="btn btn-success mr-2">Cadastrar-se</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 mb-4 d-flex justify-content-center">
                <div class="card cor-fundo-card">
                    <img class="card-img-top" src="img/eng-software-2.png" alt="Imagem da vaga de Engenharia de Software 2">
                    <div class="card-body">
                        <h5 class="titulo-maior">Desenvolvedor Full Stack Júnior</h5>
                        <p class="lead titulo-card">Node.js, React.js, SQL, Git</p>
                            <p class="lead">Desenvolvimento de sistemas web utilizando tecnologias front-end e também tecnologias back-end.</p>
                        <a href="vaga-Desenvolvedor-Full-Stack-Júnior.html" role="button" class="btn btn-success mr-2">Cadastrar-se</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 mb-4 d-flex justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="img/eng-software-3.png" alt="Imagem da vaga de Engenharia de Software 3">
                    <div class="card-body">
                        <h5 class="titulo-maior">Engenheiro de Software Sênior</h5>
                        <p class="lead titulo-card">Experiência em C++, Java, Microserviços</p>
                            <p class="lead">Experiência com arquitetura de software escaláveis e performáticos.</p>
                        <a href="vaga-Engenheiro-de-Software-Sênior.html" role="button" class="btn btn-success mr-2">Cadastrar-se</a>
                    </div>
                </div>
            </div>

    </div>
</div>
</div>


<?php
    include 'base_footer.php';
?>



</body>


</html>