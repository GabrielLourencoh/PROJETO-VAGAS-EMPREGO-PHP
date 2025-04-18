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
        <?php
            include 'base_header.php';
        ?>

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

    <?php
        include 'base_footer.php';
    ?>
</div>
</body>
</html>