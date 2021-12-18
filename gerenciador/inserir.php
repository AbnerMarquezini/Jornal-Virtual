<?php
include "conecta.php";

$editor = $_POST['editor'];
$titulo = $_POST['titulo'];
$noticia = $_POST['noticia'];
$data = $_POST['data'];
$categoria = $_POST['cat'];

$sql = "INSERT INTO noticia(editor, titulo, noticia, data, categoria) VALUES ('$editor', '$titulo', '$noticia', '$data', '$categoria')";
if(mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>
    window.location.href='listar.php';
    </script>";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>