<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercearia do João</title>
    <link href="site.css" rel="stylesheet">
    <link rel="icon" href="../img/logo1.png">
</head>
<body>
    <fieldset>
        <h2>Login</h2>
        <form action="calculadora.php" method= "post">
            <div class="campo">
                <label>Usuário</label>
                <br>  
                <input type="text" name="usuário" placeholder="Digite seu nome aqui" maxlength="30" size="30" required>
                <br>
                <br>
                <label>Senha</label>
                <br>
                <input type="password" name="senha" placeholder="Digite sua senha aqui" maxlength="20" size="30" required>
                <br>
                <div class="cadastro">
                <a href= "cadastro.php">Não sou cadastrado</a>
                </div>
                <?php
                if (isset($_POST["usuário"]) && isset($_POST["senha"])) {
                    $login = ($_POST["usuário"]);
                    $senha = ($_POST["senha"]);
               
                    if ($login == "joao_mercearia" && $senha == "joao12345") {
                        session_start();
                        $_SESSION['usuário'] = $_POST['usuário'];
                        header("Location: calculadora.php");
                        echo "Acesso concedido!";
                        exit;
                    }
                    else {
                        echo "Acesso negado, usuário e/ou senha incorretos";
                    }
                }
                ?>
                <br>
                <br>
            </div>
            <div class="botão">
                <input type="reset" name="limpar" value="limpar">
                <input type="submit" name="enviar" value="enviar">
            </div>
        </form>
        <figure>
            <img src="img/logo1.png" alt="mercearia do João" width="150" height="150">
        </figure>
        <br>
        <br>
       
    </fieldset>
</body>
</html>
