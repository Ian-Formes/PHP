<?php

require_once "config.php";

if ($_FILES['file_foto']['size'] != 0) {

    // $cardapio = $_POST['txt_cardapio'];
    $foto = $_FILES['file_foto']['name'];
    $foto = str_replace(" ", "", $foto);

    //Caminho Temporário
    $foto_temp = $_FILES['file_foto']['tmp_name'];
    $destino = "img/" . $foto;

}

// Cadastrar
if (isset($_GET['acao']) && $_GET['acao'] == 'cadastrar') {
    if (move_uploaded_file($foto_temp, $destino)) {
        $insert = $pdo->prepare("INSERT INTO banner (foto) VALUES (?)");
        $insert->bindValue(1, $foto);
        $insert->execute();
 
        header("Location: pgbanner.php");
    }
}

// Excluir
if (isset($_GET['acao']) && $_GET['acao'] == 'excluir') {
    //echo "Cardápio excluído: id = " . $_GET['id'] . "<br>Foto: " . $_GET['foto'];

    $id = $_GET['id'];
    $foto = $_GET['foto'];

    $del = $pdo->prepare("DELETE FROM banner WHERE idbanner = ?");
    $del->bindValue(1, $id);
    $del->execute();

    unlink('img/' . $foto);

    header("Location: pgbanner.php");
}

// Editar
if (isset($_GET['acao']) && $_GET['acao'] == 'editar') {
    //echo "Cardápio excluído: id = " . $_GET['id'] . "<br>Foto: " . $_GET['foto'];

    $id = $_GET['id'];
    $fotodb = $_GET['foto'];

    //Testar
    if ($_FILES['file_foto']['size'] == 0) {
        header("Location: pgbanner.php");
    } else {
        //echo 'Com foto';
        unlink('img/' . $fotodb);

        if (move_uploaded_file($foto_temp, $destino)) {
            $edit = $pdo->prepare("UPDATE banner SET foto = ? WHERE idbanner = ?");
            $edit->bindValue(1, $foto);
            $edit->bindValue(2, $id);
            $edit->execute();
    
            header("Location: pgbanner.php");
        }

    }
}



//echo "Cardápio: " . $cardapio . "<br> Foto: " . $foto;