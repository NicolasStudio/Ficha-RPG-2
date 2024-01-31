<?php
    $erroMensagem = isset($_GET['variavel']) ? $_GET['variavel'] : '';
    $mostrarErro = !empty($erroMensagem);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head class="fundo">
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="16x16" href="Imagem/iconDice.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Style.css">
    <link rel="stylesheet" href="Css/StyleErro.css">
    <script defer src="Js/Script.js"></script>
    <title>Login</title>

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
        <form action="testeLogin.php" method="POST">
            <p class="txtLogin"> Login </p>

            <p class="txtCampo1">Email: </p>
            <input type="email" class="campoEmail" name="email">
            <p class="txtCampo2">Senha: </p>
            <input type="password" class="campoSenha" name="senha">

            <button value="Entrar" class="confirmar" name="submit" type="submit">Entrar</button>

            <button class="cadastro"> <a href="Cadastro.php" class="linkCad"> Crie sua conta </a> </button>
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
