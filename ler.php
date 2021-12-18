<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Galeria de Fotos</title>
        <link href="ui.css" rel="stylesheet">
        <link rel="shortcut icon" href="gerenciador/images/icon.ico" type="image/x-icon">
    </head>
    <body>
        <div id="superior">
            <h1>Leia sua notícia</h1>
        </div>
        <div class="container">
<?php
include "gerenciador/conecta.php";
$cod = $_GET['cod'];
$query = "SELECT * FROM noticia where cod=$cod";
$result = mysqli_query($conn, $query);

while($row = $result->fetch_array())
{
$rows[] = $row;
}

foreach($rows as $row)
{
    $cod = $row['cod'];
    $data = date('d/m/Y', strtotime($row['data']));
    $editor = $row['editor'];
    $titulo = $row['titulo'];
    $noticia = $row['noticia'];
    $categoria = $row['categoria'];
    
    echo "<div class='polaroid'>";

#Estrutura condicional de inserção das fotos com If/Esle If 
    if ($categoria == 'provas'){
        echo "<img src='gerenciador/images/provas.png' class='photo'>";
    }else if ($categoria == 'tarefas'){
        echo "<img src='gerenciador/images/tarefa.png' class='photo'>";
    }else if ($categoria == 'comunicados'){
       echo "<img src='gerenciador/images/comunicado.png' class='photo'>";
    }else{
        echo "<img src='gerenciador/images/evento.png' class='photo'>";
    }
    echo "<div class='caption'>
        <h2>$titulo</h2>
        <p>$noticia</p>
    </div>
    </div>";
    }


?>
    </div>
    <div class="return">
        <a href="index.php"><img src="gerenciador/images/voltar.png"></a>
    </div>
    </body>
</html>