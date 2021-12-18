<html>
    <body>
<?php
$cod = $_GET['cod'];
include "conecta.php";
$sql = mysqli_query($conn, "DELETE FROM noticia WHERE cod = $cod");

    echo "<script type='text/javascript'>
    window.location.href='lista_excluir.php'
    </script>";
mysqli_close($conn);
?>
    </body>
</html>