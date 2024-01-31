<?php
$erro0001 = 'Senha incorreta!';
$erro0002 = 'Senhas não conferem!';
$erro0003 = 'Dados incorretos!';
$erro0004 = 'Dados existentes!';

$erroMensagem = isset($_GET['variavel']) ? $_GET['variavel'] : '';
$mostrarErro = !empty($erroMensagem);

if (isset($_POST['submit'])) {
    include_once('config.php');

    // Escape para prevenir SQL injection
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha1 = mysqli_real_escape_string($conexao, $_POST['senha1']);
    $senha2 = mysqli_real_escape_string($conexao, $_POST['senha2']);

    // Verificar se o email já existe
    $result_email_existente = mysqli_query($conexao, "SELECT id FROM tbl_jogador WHERE email = '$email'");
    
    if ($result_email_existente && $result_email_existente->num_rows > 0) {
        $erroMensagem = $erro0004;
        $mostrarErro = true;
    } else {
        // Continuar com a verificação de senha e inserção
        if ($senha1 == $senha2 && $senha1 != '') {
            $result_usuario = "SELECT id, email FROM tbl_jogador WHERE id = '$id' AND email = '$email'";
            $resultado_usuario = mysqli_query($conexao, $result_usuario);

            if ($resultado_usuario && $resultado_usuario->num_rows != 0) {
                $row_usuario = mysqli_fetch_assoc($resultado_usuario);
                // O id e o email foram encontrados na mesma linha no banco de dados
                $dbId = $row_usuario['id'];
                $dbEmail = $row_usuario['email'];

                $erroMensagem = $erro0004;
                $mostrarErro = true;
            } else {
                $resultado = mysqli_query($conexao, "INSERT INTO tbl_jogador(email, senha) VALUES ('$email', '$senha1')");
                header("Location: index.php");
            }
        } else {
            $erroMensagem = $erro0002;
            $mostrarErro = true;
        }
    }
}
?>

<!-- Seu HTML continua abaixo... -->

<!DOCTYPE html>
<html lang="pt-br">
<head  class="fundo">
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="16x16"  href="Imagem/iconDice.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Style.css">
    <link rel="stylesheet" href="Css/StyleErro.css">
    <script defer src="Js/Script.js"></script>
    <title>Cadastro</title>

    <style>
        .boxError {
            display: <?php echo $mostrarErro ? 'flex' : 'none'; ?>;
            opacity: <?php echo $mostrarErro ? '1' : '0'; ?>;
            visibility: <?php echo $mostrarErro ? 'visible' : 'hidden'; ?>;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
    </style>

</head>
<body>
    <div class="boxError" id="boxError">
        <h4 class="textError">
            <span class="spanError">
                <?php
                if ($erroMensagem == '') {
                    echo 'vazio';
                } else {
                    echo $erroMensagem;
                }
                ?>
            </span>
        </h4>
    </div>

    <div class="borda">
        <form action="Cadastro.php" method="POST">
            <p class="txtcad"> Cadastre-se </p>

            <p class="txtCampo1">Email: </p>
            <input type="email" class="campoEmail" name="email">

            <p class="txtCampo2">Senha: </p>
            <input type="password" class="campoSenha" name="senha1">

            <p class="txtCampo3">Repita sua senha: </p>
            <input type="password" class="campoSenha2"name="senha2">

            <button class="confirmCad" type="submit" name="submit">Registrar</button>
    </form>
    </div>

    <script>
        // Aguarde 3 segundos e, em seguida, oculte a mensagem de erro
        setTimeout(function() {
            var boxError = document.getElementById('boxError');
            if (boxError) {
                boxError.style.opacity = '0';
                boxError.style.visibility = 'hidden';
            }
        }, 3000);
    </script>

</body>
</html>