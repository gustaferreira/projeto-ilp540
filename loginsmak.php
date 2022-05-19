<?php
    $email = $senha = $check = "";
    if(isset($_COOKIE["email"])){
        $email = $_COOKIE["email"];
        $check = "checked";
    }
    if(isset($_COOKIE["senha"])){
        $senha = $_COOKIE["senha"];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="loginsmak.css">
    <title>Login</title>
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
                        <li class="nav-item"><a class="nav-link" href="loginsmak.php"><i class="fas fa-user"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="logado.php"><i class="fas fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    </div>
                </nav>
        </div>
    </header>
    <main>
        <div id="login" class="container">
        <h2>Login</h2>
        <form action="process_login.php" method="post" class="needs-validation" novalidate>
            
            <div class="formulario form-row">
                <input class="form-control" type="email" name="email" id="email" placeholder="Example@hotmail.com"  value="<?= $email ?>">
                <div class="invalid-feedback">
                    Campo inválido ou usuário não existe!
                </div>
            </div>
            
            <div class="formulario form-row">
                <input class="form-control" type="password" name="senha" id="senha" placeholder="Enter password.." value="<?= $senha ?>">
                <div class="invalid-feedback">
                    Senha incorreta!
                </div>
            </div>

            <div class="checkbox">
                <input type="checkbox" name="salvar" <?= $check ?>>Salvar dados de acesso
            </div>
            
            <input id="entrar" type="submit" value="Entrar">

            <div class="outros">
                <span>OR</span>
            </div>
                <div class="botoes">
                    <button id="google" type="button">
                        <i class="fab fa-google" style="font-size: 1.5rem;"></i>
                    </button>
                    <button id="face" type="button">
                        <i class="fab fa-facebook-f" style="font-size: 1.5rem;"></i>
                    </button>
                </div>
                    <div class="registrar">
                        <span>Precisando de uma conta? <a href="cadastro.php">Registre-se</a></span>
                    </div>
        </form>
    </main>
    <footer class="text-direitos">
        <p>Todos os direitos reservados Gustavo Ferreira &copy;</p>
    </footer>
    <script src="js/script.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
