<?php
include("conecta.php");

if(!isset($_SESSION)) session_start();

if(isset($_SESSION["id_usuario"])){
    $id = $_SESSION["id_usuario"];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>SMAK</title>
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
                        <?php  
                            if(isset($_SESSION["id_usuario"])){

                                $aux = "disabled";
                                        
                                $id = $_SESSION["id_usuario"];

                                echo ("<li class='nav-item'><a class='nav-link' href='cadastro.php'><i class='fas fa-user'></i></a></li>");
                                echo ("<li class='nav-item'><a class='nav-link' href='logado.php'><i class='fas fa-shopping-cart'></i></a></li>");
                                echo ("<li class='nav-item'><a class='nav-link' href='logout.php'><i class='fas fa-arrow-right'></i></a></li>");
                                } else{
                                    echo ("<li class='nav-item'><a class='nav-link' href='loginsmak.php'><i class='fas fa-user'></i></a></li>");
                                    echo ("<li class='nav-item'><a class='nav-link' href='logado.php'><i class='fas fa-shopping-cart'></i></a></li>");
                                }

                        ?>
                        
                        
                        </ul>
                    </div>
                    </div>
                </nav>
        </div>
    </header>
        <main>
            <section class="galeria">
                <img class="foto" src="https://massamadreblog.com.br/wp-content/uploads/2019/05/290332-tudo-o-que-voce-precisa-saber-sobre-as-novidades-na-confeitaria-fique-por-dentro-e-se-inspire.jpg" alt="imagem-index">
                <img class="foto" src="https://fabindustria.com.br/wp-content/uploads/2020/09/evento-reune-experts-do-mercado-para-debater-empreendedorismo-na-area-de-confeitaria.jpg" alt="imagem-index">
                <img class="foto" src="http://www.confeitariacolombo.com.br/content/img/galeria/galeria-6.jpg" alt="imagem-index">
            </section>
            <div class="historia-smak">
                    <section class="sobre">
                        <h1>Bem-vindo ?? Smak, o melhor restaurante online da regi??o!</h1>
                        <p>Somos um restaurante onde voc?? pode encontrar o melhor da sua vida!</p>
                        <p>No cardapio voc?? vai encontrar deliciosos crepes, bolos e cones trufados. Todos no pre??o que cabe no bolso e de otima qualidade. Amor ?? o principal ingrediente da nossa cozinha</p>
                        <p>Tenho a certeza de que essa ?? a melhor compra que voc?? podia fazer</p>
                        <p>Come??amos em 2020 a fim de levar mais sabor para sua vida!</p>
                    </section>
            </div>
        </main>
        <footer>   
            <div class="contato">
                    <div class="fale-conosco">
                        <section class="secao-fale-conosco">
                            <i class="fas fa-envelope"></i>
                            <h2>RECEBA NOSSAS OFERTAS POR E-MAIL!</h2>
                            <div class="formulario">
                                <input type="email" name="email" id="email" placeholder="Digite seu e-mail..">
                                <button id="enviar" type="button">Acessar ></button>
                            </div>
                        </section>
                    </div>
                <div class="d-flex align-content-md-center flex-wrap">
                    <div class="texto1">
                        <h4>Categorias</h4>
                        <p>Crepe</p>
                        <p>Bolo</p>
                        <p>Cone Trufado</p>
                    </div>
                    <div class="texto1">
                        <h4>Conte??do</h4>
                        <p>Fale Conosco</p>
                        <p>Politica de privacidade</p>
                        <p>Prazos de entrega</p>
                    </div>
                    <div class="texto1">
                        <h4>Atendimento</h4>
                        <p class="p1"><i class="fab fa-whatsapp"></i>WhatsApp: (18) 99689-0741</p>
                        <p class="p2"><i class="fas fa-clock"></i>Horario de Atendimento:</p>
                        <p>19h ??s 22:30h</p>
                    </div>
                </div>
            </div>
            <div class="mapa">
                <iframe class="mapinha" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14767.946301577018!2d-51.50914006932323!3d-22.278498364205692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94938deb94d0a277%3A0xc1a0a445d489216c!2sPirapozinho%2C%20SP%2C%2019200-000!5e0!3m2!1spt-BR!2sbr!4v1621446284188!5m2!1spt-BR!2sbr" height="450" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div id="caixa-direitos-reservados">
                <p class="texto-direitos-reservados" >Todos os direitos reservados Gustavo Ferreira &copy;</p>
            </div>
            
        </footer>
        
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>
