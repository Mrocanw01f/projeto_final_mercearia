<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
    <link href="cadastro.css" rel="stylesheet">
    <link rel="icon" href="img/Design sem nome.png" type="image/icon type">
</head>
<body>
  <h1>Cadastro de Usuário</h1>
  <figure>
     <img src="img/logo1.png" alt= "Design" tittle="Design" height="100">
  <figure>
    <fieldset>
    <form action="calculadora.php" method="post">
        <label for="nome">Nome:</label>
        <br>
        <input type="text" id="nome" name="nome" required><br>

        <label for="email">E-mail:</label>
        <br>
        <input type="email" id="email" name="email" required><br>

        <label for="senha">Senha:</label>
        <br>
        <input type="password" id="senha" name="senha" required><br>
        <br>
        <textarea id="texto" type="text" style="resize:none" readonly cols="50">

    <?php

    if (isset($_POST['cadastrar'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        echo "nome: ".$nome;
        echo "                               email: ".$email;
        echo "                               senha: ".$senha;
        
    }
    ?>
    </textarea>
<div>
        <input type="submit" name="cadastrar" value="Cadastrar">
</div>
    
    </fieldset>
    </form>
</body>
</html>
