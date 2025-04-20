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
            $sql = "select * from vagas_inscricoes where nome_vaga = '$nome_vaga'and nome = '$nome' and email = '$email' and senha = '$senha'";
            $query_verificar_cadastro = mysqli_query($conn, $sql);

            if ($query_verificar_cadastro && mysqli_num_rows($query_verificar_cadastro) > 0) {
                echo "<p class='text-center text-danger py-2'>Usuário {$nome} - {$email} já está cadastrado nessa vaga!</p>";
            } else {
                $sql = "insert into vagas_inscricoes (nome_vaga, nome, email, senha, descricao) values ('$nome_vaga', '$nome', '$email', '$senha', '$descricao')";

                $query_inserir = mysqli_query($conn, $sql);

                if ($query_inserir) {
                    echo "<p class='text-center text-success py-2'>Cadastro realizado com sucesso para o {$nome} - {$email} na vaga: {$nome_vaga}.</p>";
                } else {
                    echo "<p class='text-center text-danger py-2'>Erro ao cadastrar à vaga. Tente novamente mais tarde.</p>";
                }
            }
        } else {
            echo "<p class='text-center text-danger py-2'>Usuário não cadastrado ou credenciais inválidas!</p>";
        }

        mysqli_close($conn);
    }
?>