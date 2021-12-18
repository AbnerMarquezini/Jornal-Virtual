<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornal Virtual | AM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
    <header class="topo">
        <h1>Jornal Online - Edite as notícias</h1>
    </header>
    <main class="principal">
<?php
include 'conecta.php';
$cod = $_GET['cod'];
$query = "SELECT * FROM noticia where cod = $cod";
$result = mysqli_query($conn, $query);

while($row = $result->fetch_array())
{
$rows[] = $row;
}

foreach($rows as $row)
{
    echo "<tr>";
    echo "<form method='post' action='editarphp.php' class='form-control'>";
    echo "<input type='hidden' name='cod' value='$cod'>";
        $categoria = $row['categoria'];
}

?> 
    <p>Data: <input type="date" name="data" value="<?php echo $row['data'];?>"></p>   
    <p>Editor: <input type="text" name="editor" value="<?php echo $row['editor'];?>"></p>
    <p>Título: <input type="text" name="titulo" value="<?php echo $row['titulo'];?>"></p>
    <p>Notícia: <br>
        <textarea name="noticia" cols="50%" rows="8" autocapitalize="setences" spellcheck="true" wrap="soft"><?php 
                $noticia = $row['noticia'];
                echo "$noticia";
            ?>
        </textarea>
    </p>
    <table>
        <tr>
            <td>
                <tr>
            <td>

    <?php
                if($categoria == "provas"){
              echo "<input type='radio' name='cat' value='provas' checked>Provas:<br><img src='images/provas.png'>";

                }else{
                echo "<input type='radio' name='cat' value='provas'>Provas:<br><img src='images/provas.png'>";
            }
            echo " </td>
        <td>";
            if($categoria == "tarefas"){
                echo "<input type='radio' name='cat' value='tarefas' checked>Tarefas:<br><img src='images/tarefa.png'>";
            }else{
                echo "<input type='radio' name='cat' value='tarefas'>Tarefas:<br><img src='images/tarefa.png'>";
            }
            echo "</td>
        <td>";
        if($categoria == "atualidades"){
            echo "<input type='radio' name='cat' value='comunicados' checked>Comunicados:<br><img src='images/comunicado.png'>";
        }else{
            echo "<input type='radio' name='cat' value='comunicados'>Comunicados:<br><img src='images/comunicado.png'>";
        }
        echo "</td>
        <td>";
        if($categoria == "shows"){
            echo "<input type='radio' name='cat' value='eventos' checked>Eventos:<br><img src='images/evento.png'>";
        }else{
            echo "<input type='radio' name='cat' value='eventos'>Eventos:<br><img src='images/evento.png'>";
        }
        echo "</td>
        <td>";
    ?>
    </table>
        <p><input type="submit" value="Editar" class="submit gravar"></p>
    </form>
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
</div>
</body>
</html>