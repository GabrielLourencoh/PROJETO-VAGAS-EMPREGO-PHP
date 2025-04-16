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

        <div class="container my-5 d-flex justify-content-center">
            <div class="row container-form p-3">
                <div class="col-12 col-md-5 fundo-texto-form text-left">
                    <h3 class="mb-4 mt-5 mr-3 ml-3 text-light">
                        Bem-vindo! Crie sua conta para acessar as melhores oportunidades de emprego, visualizar vagas e se candidatar de forma fácil e rápida. Estamos prontos para ajudar você a alcançar o sucesso profissional.
                    </h3> 
                   </div>
            
            
                <div class="col-12  col-md-7 p-4">
                    <h4 class="form-label">Cadastro</h4>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label>Nome</label>
                        <input type="text" class="form-control" placeholder="Seu nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Exemplo@gmail.com" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label>Profissão</label>
                        <select name="profissao" class="form-control" required>
                            <option value="Desenvolvedor Web">Desenvolvedor web</option>
                            <option value="Engenheiro de Software">Engenheiro de Software</option>
                            <option value="Analista de Dados">Analista de Dados</option>
                            <option value="Cientistas de Dados">Cientistas de Dados</option>
                            <option value="Outro">Outro</option>
                        </select>
                       </Select>
                    </div>
                    <div class="mb-3">
                        <label>Senha:</label>
                        <input type="password" class="form-control" placeholder="Digite sua senha" name="senha" required>
                    </div>
                    <div class="mb-3">
                        <label>Confirmação de Senha</label>
                        <input type="password" class="form-control" placeholder="Confirme sua Senha" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-4">Enviar</button>
                
                    <p class="text-center mt-3">Ja possui uma conta? <a href= "login.html" >Entrar</a></p>

                    <?php
                        if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['profissao']) && isset($_POST['senha'])){
                            include 'conexao.php';

                            $nome = $_POST['nome'];
                            $email = $_POST['email'];
                            $profissao = $_POST['profissao'];
                            $senha = $_POST['senha'];
                            $sql_consulta = "select * from usuarios where email = '$email'";
                            $query_consulta = mysqli_query($conn, $sql_consulta);

                            if ($query_consulta && mysqli_num_rows($query_consulta) > 0){
                                echo "<p class='text-danger text-center'>Cadastro inválido, já existe um cadastro feito no e-mail - {$email}!</p>";
                            } else {                               
                                $sql = "insert into usuarios (nome, email, profissao, senha) values ('$nome', '$email', '$profissao', '$senha')";                                
                                $query = mysqli_query($conn, $sql);

                                echo "<p class='text-center text-success'>Cadastro concluído!</p>";
                            }
                            

                            
                            // if ($query){
                            //     echo "<p class='text-center text-success'>Cadastro concluído!</p>";
                            // } else {
                            //     echo "<p class='text-danger text-success'>Cadastro inválido!</p>";
                            // }
                            
                            mysqli_close($conn);
                        }
                    ?>
                </form>
                </div>
        </div>
    </div>

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
</div>
</body>
</html>