<?php
    session_start();

    if (isset($_POST['fechar_sessao'])) {
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit;
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
                        
                        include 'database/conexao.php';

                        $email = $_POST['email'];
                        $senha = $_POST['senha'];
                        $tempoLimiteSessao = 300; //300 segundos == 5 minutos;

                        // variavel de armazena qual consulta sql será rodada
                        $sql = "select * from usuarios where email = '$email' and senha = '$senha'";
                        // realiza a consulta no banco de dados
                        $query = mysqli_query($conn, $sql);

                        // variavel/função(mysqli_fetch_array) que transforma nossos dados puxados do select em um array associativo, algo => algo;
                        $dadosUser = mysqli_fetch_array($query);

                        if (isset($_SESSION['login']) && time() - $_SESSION['ultimo_acesso'] < $tempoLimiteSessao){
                            $mostrarModal = true;
                        } else {
                            if ($query && mysqli_num_rows($query) == 1){
                                $_SESSION['login'] = $dadosUser['nome'];
                                $_SESSION['ultimo_acesso'] = time();
                                echo "<p class='text-center text-success'>Login concluído na conta: {$dadosUser['nome']}</p>";
                            } else{
                                echo "<p class='text-center text-danger'>Login inválido! Senha ou email errados.</p>";
                            }
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
<?php
    if (isset($mostrarModal) && $mostrarModal) {
?>
    <div class="modal fade show" tabindex="-1" style="display:block; background-color: rgba(0,0,0,0.5);" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Usuário já está logado</h5>
        </div>
        <div class="modal-body">
            <p>Você já está logado como <strong><?php echo $_SESSION['login']; ?></strong>.</p>
            <p>Deseja trocar de conta?</p>
        </div>
        <div class="modal-footer">
            <form method="post">
            <input type="submit" class="btn btn-danger" name="fechar_sessao" value="Sim">
            </form>
            <a href="login.php" class="btn btn-secondary">Não</a>
        </div>
        </div>
    </div>
    </div>
    <?php
        }   
    ?>
</body>
</html>