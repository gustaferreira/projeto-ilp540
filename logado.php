<?php
    include("autentica.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="logado.css">
    <title>Logado</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
   
</head>
<body>
    <header>
        <div id="navegacao" class="menu">
            <figure><img src="img/logosmak.png" alt="logo smak" title="logo smak"></figure>
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="cadastro.php"><i class="fas fa-user"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="logado.php"><i class="fas fa-shopping-cart"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <ul class="produtos">
                <li>
                    <h2>Crepe de Nutella</h2>
                    <img src="https://cozinhasimples.com.br/wp-content/uploads/massa-basica-para-crepe-cozinha-simples-250x250.jpg">
                    <p class="produto-descricao">Crepe recheado de Nutella, muito mesmo :)</p>
                    <p class="produto-preco">R$ 10,00</p>
                    <button>Comprar</button>
                </li>
                <li>
                    <h2>Crepe de Frango</h2>
                    <img src="https://cozinhasimples.com.br/wp-content/uploads/massa-basica-para-crepe-cozinha-simples-250x250.jpg">
                    <p class="produto-descricao">Crepe recheado de Frango desfiado</p>
                    <p class="produto-preco">R$ 8,00</p>
                    <button>Comprar</button>
                </li>
                <li>
                    <h2>Crepe de Queijo</h2>
                    <img src="https://cozinhasimples.com.br/wp-content/uploads/massa-basica-para-crepe-cozinha-simples-250x250.jpg">
                    <p class="produto-descricao">Crepe recheado de Queijo, muito mesmo :)</p>
                    <p class="produto-preco">R$ 6,00</p>
                    <button>Comprar</button>
                </li>
        </ul>
    </main>
    <footer>
        <div class="mapa">
            <iframe class="mapinha" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14767.946301577018!2d-51.50914006932323!3d-22.278498364205692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94938deb94d0a277%3A0xc1a0a445d489216c!2sPirapozinho%2C%20SP%2C%2019200-000!5e0!3m2!1spt-BR!2sbr!4v1621446284188!5m2!1spt-BR!2sbr" height="450" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="text-direitos">
            <p>Todos os direitos reservados Gustavo Ferreira &copy;</p>
        </div>
    </footer>
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>