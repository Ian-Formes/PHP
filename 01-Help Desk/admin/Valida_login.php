<?php

//print_r($_GET);

//echo '<br>';
 //echo $_GET ['email'];
 //echo '<br>';
 //echo $_GET ['senha'];

//  print_r($_GET);

// echo '<br>';
//  echo $_GET ['email'];
//  echo '<br>';
//  echo $_GET ['senha'];


session_start();


$usuarios_autenticado = false;
$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' =>'1234'),
    array('email' => 'user@teste.com.br', 'senha' =>'abcd')
);


foreach($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ){
        $usuarios_autenticado = true;
    }
};

if($usuarios_autenticado){
   // echo 'usuario autenticado com sucesso';
    $_SESSION['autenticado'] = 'SIM';
    header('Location:home.php');
    
}else{
   // echo 'ERRO de autentificação';
   $_SESSION['autenticado'] = 'Nao';
   header('Location: index.php?login=erro');
};

 ?>