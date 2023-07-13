<!DOCTYPE html>
<html lang="pt-br">
<head  class="fundo">
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="16x16"  href="Imagem/iconDice.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Style.css">

    <script defer src="Js/Script.js"></script>
    <title>Login</title>

</head>
<body>

    <div class="borda">
    <form action="testeLogin.php" method="POST">
        <p class="txtLogin"> Login </p>

        <p class="txtCampo1">Email: </p>
        <input type="email" class="campoEmail" name="email">
        <p class="txtCampo2">Senha: </p>
        <input type="password" class="campoSenha" name="senha">

        <button value="Entrar" class="confirmar" name="submit" type="submit">Entrar</buttom>

        <button class="cadastro"> <a href="Cadastro.php" class="linkCad"> Crie sua conta </a> </buttom>
    </form>
    </div>




</body>
</html>