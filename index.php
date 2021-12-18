<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornal Vitual | AM</title>
    <link rel="shortcut icon" href="gerenciador/images/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="ui.css">
</head>
<body>
    <div id="superior">
        <h1>Jornal Online</h1>
    </div>
    <div class="container">
<?php
include "gerenciador/conecta.php";

$query = "SELECT * FROM noticia";
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
            <a target='_self' href='ler.php?cod=$cod'><button id='ler'>Ler notícia</button></a>
        </div>
        </div>";
    }
?>
    </div>
</body>
</html>