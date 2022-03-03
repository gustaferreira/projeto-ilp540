<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <div id="navegacao" class="menu">
            <h1><img src="img/logosmak.png" alt="logo smak" title="logo smak"></h1>
            <nav>
                <ul>
                    <li><a class="titulos-nav" href="index.html">Home</a></li>
                    <li><a class="titulos-nav" href="loginsmak.html"><i class="fas fa-user"></i></a></li>
                    <li><a class="titulos-nav" href="#"><i class="fas fa-shopping-cart"></i></a></li>
                    <li><a class="titulos-nav" href="#"><i class="fas fa-bars"></i></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div id="login" class="container">
        <h2>Cadastro</h2>
        <form action="#" method="post">
            <div class="formulario">
                <input type="email" name="email" id="email" placeholder="Example@hotmail.com">
            </div>
            <div class="formulario">
                <input type="name" name="name" id="name" placeholder="Nome..">
            </div>
            <div class="formulario">
                <input type="tel" name="tel" id="tel" placeholder="(18) 8 8888-8888">
            </div>
            <div class="formulario">
                <input type="email" name="email" id="email" placeholder="Example@hotmail.com">
            </div>
            <div class="formulario">
                <input type="password" name="password" id="password" placeholder="Enter password..">
            </div>
            
            <input id="entrar" type="submit" value="Entrar">
            <div class="outros">
                <span>OR</span>
            </div>
                <div class="botoes">
                        <button id="twiter" type="button">
                            <i class="fab fa-twitter" style="font-size: 1.5rem;"></i>
                        </button>
                        <button id="face" type="button">
                            <i class="fab fa-facebook-f" style="font-size: 1.5rem;"></i>
                        </button>
                </div>
                    <div class="registrar">
                        <span>Já possui uma conta? <a href="loginsmak.html">Login</a></span>
                    </div>
            </form>
    </div>
    </main>
    <footer>
        <p>Todos os direitos reservados Gustavo Ferreira &copy;</p>
    </footer>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
