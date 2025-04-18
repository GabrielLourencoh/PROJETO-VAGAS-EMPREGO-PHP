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

<footer class="bg-dark text-light">
    <div class="container-fluid py-3">
    <div class="row">
      <div class="col-4">
        <ul class="nav flex-column">
            <li class="nav-link"><a href="index.php" class="text-light">Retornar à home</a></li>
            <li class="nav-link"><a href="area_vagas.php" class="text-light">Retornar à área de vaga</a></li>
            <li class="nav-link"><a href="politica-privacidade.php" class="text-light">Política de Privacidade</a></li>
            <li class="nav-link"><a href="termos-uso.php" class="text-light">Termos de Uso</a></li>
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
      <p>© 2025 +VagasBrasil. Todos os direitos reservados. | <a href="politica-privacidade.php">Política de Privacidade</a> | <a href="termos-uso.php">Termos de Uso</a></p>
    </div>
</footer>

<!-- forçando o rodape a ficar sempre abaixo de tudo e grudado no final da pagina; -->
<script>
    window.addEventListener("load", function() {
        var body = document.body;
        var html = document.documentElement;
        var documentHeight = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );
        if(documentHeight < window.innerHeight) {
            document.querySelector("footer").style.position = "absolute";
            document.querySelector("footer").style.bottom = "0";
        }
    });
</script>

</body>


</html>