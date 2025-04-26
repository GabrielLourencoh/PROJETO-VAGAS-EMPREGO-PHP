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
    include 'partials/base_header.php';
?>

<div class="cor-fundo-cinza pt-2 pb-5">
    <div class="container mt-5 text-center">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <img src="img/banner-vagas.png" class="img-fluid w-100" alt="Banner principal da área de vagas">
            </div>
            <div class="col-12 col-md-6 pb-5">
                <h1 class="display-4 titulo-maior">Seja bem-vindo à nossa Área de Vagas!</h1>
                <p class="lead txt-maior">Aqui você encontrará diversas oportunidades publicadas por empresas em busca de novos talentos. Navegue pelas vagas disponíveis, explore as possibilidades e encontre a chance ideal para dar o próximo passo na sua carreira.</p>
                <a href="cadastro.php" role="button" class="btn btn-info btn-lg">Cadastrar-se</a>
            </div>
        </div>
    </div>
</div>

<div class="cor-fundo-cinza-claro pt-5 pb-5">
    <div class="container text-center">
        <?php
            include 'database/conexao.php';

            $sql_grupos = "SELECT * FROM grupos";
            $result_grupos = $conn->query($sql_grupos);
            $grupos = $result_grupos->fetch_all(MYSQLI_ASSOC);


            foreach ($grupos as $grupo) {
                $grupo_id = $grupo['id'];
                $sql_cards = "SELECT * FROM cards WHERE grupo_id = $grupo_id";
                $result_cards = $conn->query($sql_cards);
                $cards = $result_cards->fetch_all(MYSQLI_ASSOC);
            
                // se não tem card, pula esse grupo para nao repetir os titulos;
                if (count($cards) === 0) {
                    continue;
                }
            
                echo '<div class="container pb-4">';
                echo '<h1 class="text-left titulo-maior">' . $grupo['titulo'] . '</h1>';
                echo '</div>';
            
                $count = 0;
                echo '<div class="row d-flex justify-content-center">';
                foreach ($cards as $card) {
                    echo '<div class="col-12 col-sm-12 col-md-4 mb-4 d-flex justify-content-center">';
                    echo '<div class="card">';
                    echo '<img class="card-img-top" src="'.$card['imagem_url'].'" alt="Imagem">';
                    echo '<div class="card-body">';
                    echo '<h5 class="titulo-maior">'.$card['titulo_card'].'</h5>';
                    echo '<p class="lead titulo-card">'.$card['descricao'].'</p>';
                    echo '<a href="'.$card['link_vaga'].'" role="button" class="btn btn-success mr-2">Cadastrar-se</a>';
                    echo '</div></div></div>';
            
                    $count++;
                    if ($count % 3 == 0) {
                        echo '</div><div class="row d-flex justify-content-center">';
                    }
                }
                echo '</div>'; 
            }
            
        ?>
    </div>
</div>


<?php
    include 'partials/base_footer.php';
?>



</body>


</html>