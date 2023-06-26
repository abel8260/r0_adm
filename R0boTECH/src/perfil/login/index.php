<?php
session_start();
?> 

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro  </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
</head>
 
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey"><i class="fas fa-edit"></i>Login</h3>
                    
<?php

if(isset($_SESSION['status_cadastro'])):

?>

                    <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                      <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                    </div>

<?php
endif;
unset($_SESSION['status_cadastro']);
?>

<?php
if(isset($_SESSION['usuario_existe'])):
?>

                    <div class="notification is-info">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
<?php
endif;
unset($_SESSION['usuario_existe']);
?>


                    <div class="box">
                        <form action="login.php" method="POST">
                            
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuário">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">logar </button>
                        </form>
                    </div>

                     <a href="../signup/index.php"> <button class="button is-link is-rounded">Não tem conta? Click aqui pra  se cadastrar!</button></a>

                </div>
            </div>
        </div>
    </section>
</body>
 
</html>