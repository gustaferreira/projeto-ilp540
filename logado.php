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
                        <li class="nav-item"><a class="nav-link" href="loginsmak.php"><i class="fas fa-user"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="formulario">
                <input type="name" name="name" id="name" placeholder="Digite o nome...">
            </div>
            <div class="formulario">
                <input id="url" type="text" placeholder="Digite a URL...">
            </div>
            <div class="botoes">
                <button id="button">ENVIAR</button>
            </div>
        </div>
    </main>
        <script>
            var button = document.getElementById('button')

             button.addEventListener('click',function(event){
                var imageurl = document.getElementById('url').value

                var img = document.createElement('img')

                img.src = imageurl

                document.body.appendChild(img)
            })
        </script>
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>