<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Jornal Online</title>
        <link href="style.css" rel="stylesheet">
        <link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">
    </head>
    <body>
        <div class="container">
            <header class="topo">
                <h1>Jornal Online - Exclua as notícias</h1>
            </header>
            <main class="principal">
                <table border="1">
                    <th>Cod</th>
                    <th>Data</th>
                    <th>Editor</th>
                    <th>Titulo</th>
                    <th>Excluir</th>
<?php
include "conecta.php";

$query = "SELECT * FROM noticia";
$result = mysqli_query($conn, $query);

while($row = $result->fetch_array())
{
$rows[] = $row;
}

foreach($rows as $row)
{
    echo "<tr>";
    echo "<td>" .$row['cod'] ."</td>";
    $cod=$row['cod'];
    echo "<td>" .date('d/m/Y', strtotime($row['data'])) ."</td>";
    echo "<td>" .$row['editor'] ."</td>";
    echo "<td>" .$row['titulo'] ."</td>";
    echo "<td><a href='excluir.php?cod=$cod'><img src='images/trash30x30.png'></a></td>";
    echo "</tr>";
}
?>
</table>
</main>
        <nav class="menu">
            <h1>Menu:</h1>
        <ul class="list-menu">
            <li class="li-item"><a href="index.html"><img src="images/home50x50.png" alt="Ícone de página principal"></a></li>
            <li class="li-item"><a href="listar.php"><img src="images/edit50x50.png" alt="Ícone de lápis simbolizando edição"></a></li>
            <li class="li-item"><a href="lista_excluir.php"><img src="images/trash50x50.png" alt="Ícone de lixeira"></a></li>
        </ul>
    </nav>
    <footer class="rodape">
        <p class="dev">@Abner Marquezini</p>
    </footer>
    </body>
</html>