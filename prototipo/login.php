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
        include 'partials/base_header.php';
    ?>


    <div class="container my-5 d-flex justify-content-center">
        <div class="row container-form p-3" id="espaco-formulario">
            <div class="col-12 col-md-5 fundo-texto-form text-light">
                <h3 class="mb-4 mt-5 mr-3 ml-3 text-light pb-5">Bem-vindo de volta!
                    Acesse sua conta para visualizar vagas, candidatar-se e acompanhar suas oportunidades de emprego. Estamos aqui para ajudar na sua jornada profissional!
                </h3> 
            </div>
            
            <div class=" col-12 col-md-7 p-4">
                <h4 class="form-label">Login</h4>
            
            <form method="POST" action="">
            <div class="mb-3">
                <label>Email:</label>
                <input type="text" class="form-control" placeholder="Exemplo@gmail.com" name='email' required>
            </div>
                <div class="mb-3">
                    <label>Senha:</label>
                    <input type="password" class="form-control" placeholder="Digite sua Senha:" name='senha' required>
                    <button type="submit" class="btn btn-primary w-100 mt-4">Enviar</button>
                </div>
                <p class="text-center">Ainda não possui conta? <a href= "cadastro.html" >Cadastrar-se</a></p>
                <?php
                    if(isset($_POST['email']) && isset($_POST['email'])){
                        include 'conexao.php';

                        $email = $_POST['email'];
                        $senha = $_POST['senha'];

                        // variavel de armazena qual consulta sql será rodada
                        $sql = "select * from usuarios where email = '$email' and senha = '$senha'";
                        // realiza a consulta no banco de dados
                        $query = mysqli_query($conn, $sql);

                        // variavel/função(mysqli_fetch_array) que transforma nossos dados puxados do select em um array associativo, algo => algo;
                        $dados = mysqli_fetch_array($query);

                        if ($dados){
                            echo "<p class='text-center text-success'>Login concluído na conta: {$dados['nome']}</p>";
                        } else{
                            echo "<p class='text-center text-danger'>Login inválido! Senha ou email errados.</p>";
                        }
                        
                        

                        mysqli_close($conn);
                    }
                ?>
            </form>
            </div>
        </div>
    </div>


<?php
    include 'partials/base_footer.php';
?>
</div>
</body>
</html>