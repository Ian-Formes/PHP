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
$usuarios_id = null;

$usuarios_app = array(
    array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' =>'1234'),
    array('id' => 2, 'email' => 'user@teste.com.br', 'senha' =>'abcd'),
    array('id' => 3, 'email' => 'ian@formes.com.br', 'senha' =>'1234')
);


foreach($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ){
        $usuarios_autenticado = true;
        $usuarios_id = $user['id'];
    }
};

if($usuarios_autenticado){
   // echo 'usuario autenticado com sucesso';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuarios_id;
    header('Location:home.php');
    
}else{
   // echo 'ERRO de autentificação';
   $_SESSION['autenticado'] = 'Nao';
   header('Location: index.php?login=erro');
};

 ?>