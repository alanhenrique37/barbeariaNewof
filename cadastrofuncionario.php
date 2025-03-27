<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Senha: ' . $_POST['senha']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

      
        $senha = $_POST['senha'];
        $email = $_POST['email'];
       

        $result = mysqli_query($conexao, "INSERT INTO loginFuncionario(email,senha) 
        VALUES ('$email','$senha')");

        header('Location: loginfuncionario.php');
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login Neguinho Corts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">

  </head>
  <body class="img js-fullheight" style="background-image: url(images/fundoLogin.jpg);">

  
    <section class="ftco-home" style="padding:22px;">
      <div class="container">
        <div class="row justify-content-center">
          
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="login-wrap p-0">
              <!-- Espaço para a logo -->
              <div class="text-center mb-4">
                <img src="images/logobranca.png" alt="Logo" class="img-fluid" style="max-width: 150px;">
              </div>
              <h3 class="mb-4 text-center">Cadastro de Funcionário</h3>
              <form action="" method="POST" class="signin-form">
                <div class="form-group">
                  <input id="password-field" type="text" class="form-control" type="email" name="email" id="email"  required placeholder="Email">
                </div>


            
                <div class="form-group">
                  <input id="password-field" type="password" class="form-control" placeholder="Senha" required name="senha">
                </div>
             
                <div class="form-group">
                  
                <button type="submit" name="submit" id="submit" class="form-control btn btn-primary submit px-3" data-toggle="modal" data-target="#confirmationModal" style="text-transform:none">Cadastrar</button>
                
                </div>
                <div class="form-group d-md-flex">
                  <div class="w-50">
                    
                  </div>
                </div>
              </form>
              <a href="indexFuncionario.php"> <button class="botao-cadastro form-control" style="margin-top:10px;" >Voltar</button></a>
             
            </div>
          </div>
        </div>
      </div>
    </section>



    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
