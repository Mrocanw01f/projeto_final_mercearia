<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercearia do João</title>
    <link href="calculadora.css" rel="stylesheet">
    <link rel="icon" href="img/logo1.png">
</head>
<body>


    <div class="exit">
    <a href="exit.php"><img src="img/remove.png" title="voltar" width="25" height="25"></a>
    </div>
    <id>Calculadora</id>
    <a href="sobre.php"div class="sobre">Sobre</a>
    <figure><img src="img/calculadora.png" alt="calculos" width="150" height="150"></figure>
    <h1><p>Valores</p></h1>
    <form action= "calculadora.php" method= "post">
    <input class="fatores" type="number" name="num1" placeholder="n° 1" cols="50" required>
    <br>
    <br>
    <br>
    <input class="fatores" type="number" name="num2" placeholder="n° 2" cols="50" required>
    <br>
    <fieldset><h2>
        <table>
            <tr>
                <td><input type="radio" name="operacoes" value="mult" required>
                    <label>Multiplicação</label></td>
                <td><input type="radio" name="operacoes" value="div">
                    <label>Divisão</label></td>


            </tr>
            <tr>
                <td><input type="radio" name="operacoes" value="soma">
                    <label>Adição</label></td>
                <td><input type="radio" name="operacoes" value="menos">
                    <label>Subtração</label></h2></td>


            </tr>
        </table>
        </fieldset>
        <br>
        <button class="botao">Calcular</button>
    <h1>Total</h1>
        <textarea id="texto" type="text" style="resize:none" readonly rows= "2" cols="45">
        <?php


    session_start();


    //verifica se a sessão é existente
    if (!isset($_SESSION["usuário"])) {
        header("location:index.php");
    }
        if (isset($_POST["num1"])&& isset($_POST["num2"]) ) {
            $num1 = ($_POST["num1"]);
            $num2 = ($_POST["num2"]);
            $operacoes = ($_POST["operacoes"]);
            $resultado = 0;
       
            if ($operacoes == "mult") {
                $resultado = $num1 * $num2;
                echo $resultado;
            }
            elseif ($operacoes == "div") {
                $resultado = $num1 / $num2;
                echo $resultado;
            }
            elseif($operacoes == "soma") {
                $resultado = $num1 + $num2;
                echo $resultado;
            }
            elseif ($operacoes == "menos") {
                $resultado = $num1 - $num2;
                echo $resultado;
            }  
    }
            ?>
            </textarea>
    <br>
</form>
    <figure><img src="img/logo1.png" width="200" height="200"></figure>


</body>
</html>
