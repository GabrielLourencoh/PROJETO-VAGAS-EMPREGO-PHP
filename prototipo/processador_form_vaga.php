<?php
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['nome_vaga']) && isset($_POST['descricao'])) {
    include 'database/conexao.php';

    $nome = $_POST['nome'];
    $nome_vaga = $_POST['nome_vaga'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $descricao = $_POST['descricao'];
    $mensagem = "";

    $sql = "select * from usuarios where nome = '$nome' and email = '$email' and senha = '$senha'";
    $query = mysqli_query($conn, $sql);

    if ($query && mysqli_num_rows($query) > 0) {
        #TODO devo fazer verificação para caso usuario ja esteja cadastrado, não permitir
        $sql = "select * from vagas_inscricoes where nome_vaga = '$nome_vaga'and nome = '$nome' and email = '$email' and senha = '$senha'";
        $query_verificar_cadastro = mysqli_query($conn, $sql);

        if ($query_verificar_cadastro && mysqli_num_rows($query_verificar_cadastro) > 0) {
            $mensagem = "<p class='text-center text-danger py-2'>Usuário {$nome} - {$email} já está cadastrado nessa vaga!</p>";
        } else {
            $sql = "insert into vagas_inscricoes (nome_vaga, nome, email, senha, descricao) values ('$nome_vaga', '$nome', '$email', '$senha', '$descricao')";

            $query_inserir = mysqli_query($conn, $sql);

            if ($query_inserir) {
                $mensagem = "<p class='text-center text-success py-2'>Cadastro realizado com sucesso para o {$nome} - {$email} na vaga: {$nome_vaga}.</p>";
            } else {
                $mensagem = "<p class='text-center text-danger py-2'>Erro ao cadastrar à vaga. Tente novamente mais tarde.</p>";
            }
        }
    } else {
        $mensagem = "<p class='text-center text-danger py-2'>Usuário não cadastrado ou credenciais inválidas!</p>";
    }

    mysqli_close($conn);
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
    <link rel="stylesheet" href="css/cadastro-vaga.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="bg-light">

<?php
    include 'partials/base_header.php';
?>


<div class="cor-fundo-cinza-claro pt-5 pb-5">
    <div class="container text-center mb-5 mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-12 col-md-6 mb-6  d-flex justify-content-center">
                <div class="card tamanho-card pt-3">
                    <div class="card-body">
                        <h5 class="titulo-maior display-4">Resultado - Cadastro da Vaga</h5>
                        <p class="lead titulo-card"><?php echo $mensagem ?></p>
                        <a href="area_vagas.php" role="button" class="btn btn-success mr-2">Voltar à área de vagas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cor-fundo-cinza-claro pb-5 pt-5"> </div>
<div class="cor-fundo-cinza-claro pb-5"></div>

<?php
    include 'partials/base_footer.php';
?>

</body>
</html>