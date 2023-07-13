<?php
//Se eu clicar no botão vai existir uma variavel SUBMIT, ele salva no banco de dado.

    if(isset($_POST['submit'])){
        include_once ('config.php');

        /// ja que o post esta sendo recebido de maneira correta, é so armazenar e passar para o banco de dados
        $email = $_POST['email'];
        $senha1 = $_POST['senha1'];
        $senha2 = $_POST['senha2'];

        if($senha1 == $senha2){
                $resultado = mysqli_query($conexao , "INSERT INTO tbl_jogador(email, senha) values ('$email', '$senha1')");
                header("Location: index.php");
        }else{
                //echo('Erro');
                header("Location: Cadastro.php");
                 // ERRO NO CADASTRO    
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head  class="fundo">
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="16x16"  href="Imagem/iconDice.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Style.css">

    <script defer src="Js/Script.js"></script>
    <title>Cadastro</title>

</head>
<body>

    <div class="borda">
        <form action="Cadastro.php" method="POST">
            <p class="txtcad"> Cadastre-se </p>

            <p class="txtCampo1">Email: </p>
            <input type="email" class="campoEmail" name="email">

            <p class="txtCampo2">Senha: </p>
            <input type="password" class="campoSenha" name="senha1">

            <p class="txtCampo3">Repita sua senha: </p>
            <input type="password" class="campoSenha2"name="senha2">

            <button class="cadastro" type="submit" name="submit">  Registrar  </buttom>
    </form>
    </div>




</body>
</html>