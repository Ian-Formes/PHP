<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Help  Desk</title>
    
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>

</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="logo">
        <img src="../assets/img/logo (1).png" width="30" height="30" class="d-inline-block align-top" alt="" >Help Desk
        <!-- Name -->
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="Valida_login.php" method="post">
                <div class="form-group">
                  <input name= "email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <?php
                if(isset($_GET['login']) && $_GET ['login'] == 'erro'){
                ?>
                <div class="text-danger">
                  usuario ou senha invalido!
                </div>
                <?php
                };
                ?>

<?php
                
                if(isset($_GET['login']) && $_GET ['login'] == 'erro2'){
                  ?>
                  <div class="text-danger">
                    Faça LOGIN antes de acessar as paginas protegidas
                  </div>
                

                <?php
                };
                ?>


                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
    
</body>
</html>