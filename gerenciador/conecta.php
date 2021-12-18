<?php

$servername = "";
$database = "";
$username = "";
$password = "";

//Criando a conexão com a database
$conn = mysqli_connect($servername, $username, $password, $database);

//Checando a conexão
//if(!$conn){
//    die("A conexão falhou: " . mysqli_connect_error());
//}else{
//    echo "Conectado.";
//}

?>