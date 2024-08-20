<?php 
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

session_start();

//$texto = $_POST['titulo'] . $_POST['categoria'] .$_POST['descrição'];

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descrição = str_replace('#', '-', $_POST['descrição']);

$texto = $_SESSION['id'] . '#' . $titulo . '#' .$categoria . '#' . $descrição. PHP_EOL;

// echo $texto;

//Abrir o arquivo
$arquivo = fopen('arquivo.txt', 'a');


fwrite($arquivo, $texto);

fclose($arquivo);

header('Location: abrir_chamado.php');

?>