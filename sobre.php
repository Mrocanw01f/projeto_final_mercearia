<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link href="sobre.css" rel="stylesheet">
    <link rel="icon" href="img/logo1.png">
    
</head>
<body>
<div class="exit">
    <a href="exit.php"><img src="img/remove.png" title="voltar" width="25" height="25"></a>
    </div>
    <div class="btn-group" role="group" aria-label="..."><a href="calculadora.php"><id>Calculadora</id></a></div>
    <div class="btn-group btn-group-sm" role="group" aria-label="..."><a href="sobre.php"><id>Sobre nós</id></a></div>
    <hr>
    <br>
    <figure>
        <img src="img/logo1.png" width="250" height="250">
    </figure>
    <p>Olá, sou o João e tenho 53 anos, nasci em São Thomé das Letras, no interior de Minas Gerais. Em 2021 participei do quadro “Lar Doce Lar” do programa do Luciano Hulk. Fui contemplado com a reforma da minha mercearia que funciona desde 1993, quando era do meu falecido pai, Seu João.


        Após o período pandêmico, trabalhadores autônomos como eu, sentiram a necessidade de inovar a administração do seu negócio. Com a ajuda dos Backysix, implementei o aplicativo “Calculadora do João” que me auxilia no meu dia a dia e facilita a vida dos meus clientes. </p>
 
    <br>
    <h3>Desenvolvedores:</h3>
    <br>
    <br>
    <p>Maryana Monteiro</p>
    <figure>
        <img src="img/maryana.jpeg" width="200" height="200">
    </figure>
    <br>
    <p>Tenho 16 anos, sou a diretora executiva da Backysix, sou formada em administração e ciências contábeis. Ao ficar sabendo da história comovente do João decidi reunir minha equipe para realizar essa missão e ajudar o nosso cliente.</p>
    <br>
    <br>
    <p>Marcella Heloise</p>
    <figure>
        <img src="img/marcella.jpeg" width="200" height="200">
    </figure>
    <br>
    <p>Olá, tenho 16 anos e sou formada em gestão da tecnologia da informação e em marketing, trabalho na gestão da Backysix e trabalho a mais de 5 anos no crescimento da nossa empresa. </p>
    <br>
    <br>
    <p>Lívia</p>
    <figure>
        <img src="img/lívia.jpg" width="200" height="200">
    </figure>
    <br>
    <p>Tenho 16 anos e sou tecnóloga em design de mídias digitais. A Beckysix foi uma grande oportunidade para minha vida, pois fui contratada no período pandêmico.</p>
    <br>
    <br>
    <p>Leticia</p>
    <figure>
        <img src="img/gatinho-entrevistado.jpg" width="200" height="200">
    </figure>
    <br>
    <p>Tenho 16 anos e sou Designer Gráfica. Fui convidada a colaborar com o desenvolvimento do site “Calculadora do João” pela Backysix. Conheci o Seu João no programa do Luciano, pois no mesmo dia estava participando do “The Wall”. </p>
    <br>
    <br>
    <p>Miguel</p>
    <figure>
        <img src="img/mikhaé.jpg" width="200" height="200">
    </figure>
    <br>
    <p>Tenho 16, sou formado em desenvolvimento de sistemas, trabalho na Backysix a alguns anos. Comprar os mantimentos na Mercearia do João sempre foi uma tradição da minha família. Hoje posso ajudar João com meus conhecimentos sobre sistemas.</p>
    <br>
    <br>
    <p>Gustavo</p>
    <figure>
        <img src="img/adam ohare.jpg" width="200" height="200">
    </figure>
    <br>
    <p>Tenho 15 anos. Entrei na Beckysix recentemente, sou formado em Desenvolvimento Full Stack, me identifico muito com as propostas da empresa e me sinto lisonjeado em ajudar nesse novo projeto. </p>
    <br>
    <?php

    session_start();

    //verifica se a sessão é existente
    if (!isset($_SESSION["usuário"])) {
        header("location:index.php");
    }
    ?>
    <br>
    <p>Entre em contato conosco:</p>
    <figure>
        <img src="img/6b (1).png" width="190" height="190">
    </figure>
    <br>
    <img src="img/instagram.png" width="16" height="16"><a href="https://instagram.com/Backysix/"> instagram</a>
    <br>
    <script src =" https://vlibras.gov.br/app/vlibras-plugin.js "> </script>
    <script> 
        new window.VLibras.Widget( 'https://vlibras.gov.br/app' );
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>