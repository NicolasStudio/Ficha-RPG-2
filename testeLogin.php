<?php
    session_start();
    $erro0001 = 'Senha incorreta!';
    $erro0002 = 'Senhas não conferem!';
    $erro0003 = 'Dados incorretos!';
    $erro0004 = 'Dados existentes!';

    if(isset($_POST['submit'])  && !empty($_POST['email']) && !empty($_POST['senha'])){
        // se a pessoa clicar em submit com os dados certos ela acessa o site

        include_once('config.php');

        //Valores pegos quando for digitado.
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // essa busca é feita se existe algum email e senha, exatamente iguais aos que foram digitados, lá no banco de dados
        $sql = "SELECT * FROM tbl_jogador WHERE email = '$email' and senha = '$senha'";

        $resultado = $conexao->query($sql);

        if(mysqli_num_rows($resultado) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);

            header("Location: login.php?variavel=$erro0001");
            exit();

        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header("Location: index.php");
        }

    }else{
        // Não acessa e retorna. 
        header("Location: login.php?variavel=$erro0003");
        exit();
    }
?>