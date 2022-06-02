<?php
include("conecta.php");

if(!isset($_SESSION)) session_start();


if(isset($_SESSION["id_usuario"])){

	$aux = "disabled";

	$id = $_SESSION["id_usuario"];

	try {
	
		$sql = "SELECT * FROM `usuarios` WHERE `id` = '$id'";
		
		$res = $conn->query($sql)->fetchAll();

	        if(count($res) > 0) {
	        foreach ($res as $row) {
	            $email = $row['email'];
	            $nome = $row['nome'];
	            $telefone = $row['telefone'];
	            $senha = $row['senha'];
            }	      
    	}	
	} catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;
}
else{
	$nome = "";
	$email = "";
	$telefone = "";
	$senha = "";
	$aux = "";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <title>Cadastro</title>
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
                                } else{
                                    echo ("<li class='nav-item'><a class='nav-link' href='loginsmak.php'><i class='fas fa-user'></i></a></li>");
                                }

                        ?>
                        
                        
                        <li class="nav-item"><a class="nav-link" href="logado.php"><i class="fas fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    </div>
                </nav>
        </div>
    </header>
    <main>
        <div id="cadastro" class="container">
        <?php  
                if(isset($_SESSION["id_usuario"])){

                    $aux = "disabled";
                            
                    $id = $_SESSION["id_usuario"];

                    echo ("<h2>Alterar Cadastro</h2>");
                    } else{
                        echo ("<h2>Cadastro</h2>");
                    }

            ?>
            <form action="process_cadastrar.php" method="post" class="needs-validation">
                <div class="formulario form-row">
                    <input class="form-control" type="email" name="email" id="email" placeholder="Example@hotmail.com" value="<?=$email?>" <?=$aux?> required>
                    <div class="invalid-feedback">
                        Campo inválido! Corrija para seguir
                    </div>
                </div>
                <div class="formulario form-row">
                    <input class="form-control" type="name" name="nome" id="nome" placeholder="Nome.." value="<?=$nome?>" required>
                    <div class="invalid-feedback">
                        Campo inválido! Corrija para seguir
                    </div>
                </div>
                <div class="formulario form-row">
                    <input class="form-control" type="tel" name="telefone" id="telefone" placeholder="(18) 8 8888-8888" value="<?=$telefone?>"required>
                    <div class="invalid-feedback">
                        Campo inválido! Corrija para seguir
                    </div>
                </div>
                <div class="formulario form-row">
                    <input class="form-control" type="password" name="senha" id="senha" placeholder="Enter password.." value="<?=$senha?>"required>
                    <div class="invalid-feedback">
                        As senhas não conferem!
                    </div>
                </div>
                <div class="formulario form-row">
                    <input class="form-control" type="password" name="confirm_senha" id="confirm_senha" placeholder="Confirm password.." value="<?=$senha?>"required>
                    <div class="invalid-feedback">
                        As senhas não conferem!
                    </div>
                </div>
                
                <input id="entrar" type="submit" value="Registrar">
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
                    <div class="registrar text-excluir-conta">
                        <?php  
                            if(isset($_SESSION["id_usuario"])){

                                $aux = "disabled";
                            
                                $id = $_SESSION["id_usuario"];

                                echo ("<div class='registrar'> <span><a href='excluir.php?id=$id'>Excluir a conta</span></div>");
                            } else{
                                echo ("<div class='registrar'> <span>Já possui uma conta? <a href='loginsmak.php'>Login</a></span> </div>");
                            }

                        ?>
                    </div>
            </form>
        </div>
    </main>
    <footer>
        <p>Todos os direitos reservados Gustavo Ferreira &copy;</p>
    </footer>
    
    <script src="js/script.js" ></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
