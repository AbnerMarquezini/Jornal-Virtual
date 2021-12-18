<?php
include "conecta.php";
    $cod = $_POST['cod'];
    $editor = $_POST['editor'];
    $titulo = $_POST['titulo'];
    $noticia = $_POST['noticia'];
    $data = $_POST['data'];
    $data = date('Y/m/d', strtotime($data));
    $categoria = $_POST['cat'];
    $sql = "UPDATE noticia SET editor='$editor', titulo='$titulo', noticia='$noticia', data='$data', categoria='$categoria' WHERE cod = $cod";
    
    if(mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>
        window.location.href='listar.php';
        </script>";
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>